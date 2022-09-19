<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $dataSets = $this->getDataSets();
        foreach ($dataSets as $quizData) {
            $quiz = $this->createQuiz($manager, $quizData);
            $questions = $quizData['questions'];

            foreach ($questions as $questionData) {
                $question = $this->createQuestion($manager, $questionData, $quiz);
                $answers = $questionData['answers'];
                foreach ($answers as $answerData) {
                    $this->createAnswer($manager, $answerData, $question);
                }
            }

            $manager->flush();
        }
    }

    /**
     * @return array{array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}}}
     */
    protected function getDataSets(): array
    {
        $quizData = [];
        $filePaths = $this->getFilePaths();
        foreach ($filePaths as $filePath) {
            $quizData[] = require_once dirname(__DIR__) . '/../' . $filePath;
        }

        /**
         * @var array{array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}}} $quizData
         */
        return $quizData;
    }


    protected function getFilePaths(): array
    {
        return [
            'config/fixtures/quizzes/html-quiz/quiz.php'
        ];
    }

    /**
     * @param ObjectManager $manager
     * @param array{title: string, slug: string} $data
     * @return Quiz
     */
    protected function createQuiz(ObjectManager $manager, array $data): Quiz
    {
        $entity = new Quiz();
        $entity->setTitle($data['title'])
            ->setSlug($data['slug']);

        $manager->persist($entity);

        return $entity;
    }

    /**
     * @param ObjectManager $manager
     * @param array{content: string} $data
     * @param Quiz $quiz
     * @return Question
     */
    protected function createQuestion(ObjectManager $manager, array $data, Quiz $quiz): Question
    {
        $entity = new Question();
        $entity->setContent($data['content'])
            ->setQuiz($quiz);
        $manager->persist($entity);

        return $entity;
    }

    /**
     * @param ObjectManager $manager
     * @param array{content: string, display_order: integer, is_correct: boolean} $data
     * @param Question $question
     * @return Answer
     */
    protected function createAnswer(ObjectManager $manager, array $data, Question $question): Answer
    {
        $entity = new Answer();
        $entity
            ->setContent($data['content'])
            ->setDisplayOrder($data['display_order'])
            ->setIsCorrect($data['is_correct'])
            ->setQuestion($question);

        $manager->persist($entity);

        return $entity;
    }

}
