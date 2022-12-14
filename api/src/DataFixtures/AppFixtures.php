<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    /** @var ObjectManager */
    private $objectManager;

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager): void
    {
        $this->objectManager = $manager;

        $this->createQuizzes();
    }

    /**
     * @return array<int, Quiz> $createdQuizzes
     */
    public function createQuizzes(): array
    {
        $createdQuizzes = [];
        $dataSets = $this->getDataSets();

        foreach ($dataSets as $quizData) {
            $quiz = $this->createQuiz($quizData);
            $questions = $quizData['questions'];

            $this->createQuestions($questions, $quiz);

            $this->objectManager->flush();
            $createdQuizzes[] = $quiz;
        }

        return $createdQuizzes;
    }

    /**
     * @param array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }} $questions
     * @param Quiz $quiz
     * @return array<int, Question> $createdQuestions
     */
    public function createQuestions(array $questions, Quiz $quiz): array
    {
        $createdQuestions = [];
        foreach ($questions as $questionData) {
            $question = $this->createQuestion($questionData, $quiz);
            $answers = $questionData['answers'];

            $this->createAnswers($answers, $question);

            $createdQuestions[] = $question;
        }

        return $createdQuestions;
    }

    /**
     * @param array{array{content: string, is_correct: boolean, display_order: integer}} $answers
     * @param Question $question
     * @return array<int, Answer> $createdAnswers
     */
    public function createAnswers(array $answers, Question $question): array
    {
        $createdAnswers = [];
        foreach ($answers as $answerData) {
            $answer = $this->createAnswer($answerData, $question);
            $createdAnswers[] = $answer;
        }

        return $createdAnswers;
    }

    /**
     * @return array{array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}}}
     */
    public function getDataSets(): array
    {
        $quizData = [];
        $filePaths = $this->getFilePaths();
        foreach ($filePaths as $filePath) {
            $quizData[] = require dirname(__DIR__) . '/../' . $filePath;
        }

        /**
         * @var array{array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}}} $quizData
         */
        return $quizData;
    }

    /**
     * @return string[]
     */
    public function getFilePaths(): array
    {
        return [
            'config/fixtures/quizzes/html-quiz/quiz.php',
            'config/fixtures/quizzes/javascript-quiz/quiz.php',
            'config/fixtures/quizzes/python-quiz/quiz.php'
        ];
    }

    /**
     * @param array{title: string, slug: string} $data
     * @return Quiz
     */
    public function createQuiz(array $data): Quiz
    {
        $entity = new Quiz();
        $entity->setTitle($data['title'])
            ->setSlug($data['slug']);

        $this->objectManager->persist($entity);

        return $entity;
    }

    /**
     * @param array{content: string} $data
     * @param Quiz $quiz
     * @return Question
     */
    public function createQuestion(array $data, Quiz $quiz): Question
    {
        $entity = new Question();
        $entity->setContent($data['content'])
            ->setQuiz($quiz);
        $this->objectManager->persist($entity);

        return $entity;
    }

    /**
     * @param array{content: string, display_order: integer, is_correct: boolean} $data
     * @param Question $question
     * @return Answer
     */
    public function createAnswer(array $data, Question $question): Answer
    {
        $entity = new Answer();
        $entity
            ->setContent($data['content'])
            ->setDisplayOrder($data['display_order'])
            ->setIsCorrect($data['is_correct'])
            ->setQuestion($question);

        $this->objectManager->persist($entity);

        return $entity;
    }
}
