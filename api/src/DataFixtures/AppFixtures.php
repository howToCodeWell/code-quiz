<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Quiz;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Parsedown;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\Finder\Finder;

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

    public function getQuizIDFromDirName(string $dirname): int
    {
        $parts = explode('_', $dirname);
        return (int) $parts[0];
    }

    public function getQuizNameFromDirName(string $quiz): string
    {
        $name = str_replace('_', ' ', $quiz);
        $name = ltrim(strstr($name, ' '), ' ');
        return ucfirst($name);

    }

    public function getQuizData():array
    {
        $baseDir = dirname(__DIR__) . '/../config/fixtures/quizzes';
        $finder = new Finder();
        $dirs = $finder->directories()->in($baseDir)->depth('> 1');

        $directories = glob($baseDir . '/*' , GLOB_ONLYDIR);

        $quizzes = [];
        foreach ($dirs->getIterator() as $directory) {
            var_dump($directory);
            die();
            $dirName = basename($directory->getPath());
            $quizID = $this->getQuizIDFromDirName($dirName);
            $quizName = $this->getQuizNameFromDirName($dirName);

            $quizzes[] = [
                'dirname' => $dirName,
                'name' => $quizName,
                'id' => $quizID,
            ];
        }

        return $quizzes;
    }

    /**
     * @return array{array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}}}
     */
    public function getDataSets(): array
    {

        $n = $this->getQuizData();
        var_dump($n);
die();
        $quizData = [];

        $parseDown = new Parsedown();
        $baseDir = dirname(__DIR__) . '/../config/fixtures/quizzes';
        $finder = new Finder();
        $finder->files()->in($baseDir . "/*");


        foreach ($finder as $file) {
            $filename = $file->getFilename();
            $dirName = basename($file->getPath());
            $quizID = $this->getQuizIDFromDirName($dirName);
            $quizName = $this->getQuizNameFromDirName($dirName);

            var_dump($quizName); die();

            if ($filename === 'index') {
                continue;
            }
            $contents = $file->getContents();
            $parsed = $parseDown->parse($contents);

            $crawler = new Crawler($parsed);

            $quizzes[$dirName] = [
                'quiz' => [
                    'name' => $quizName,
                    'id' => $quizID,
                    'items' => []
                ],
                'filename' => $filename,
                'question' => [],
                'possible_answer' => [],
                'answer' => []
            ];
            $data = $crawler->filter('body > *');

            $possibleAnswer = false;
            foreach ($data as $node) {

                $text = $node->textContent;
                if ($text === "Possible answers") {
                    $possibleAnswer = true;
                }

                if ($node->localName === "details") {
                    $possibleAnswer = false;
                    $parts['answer'][] = $node->C14N();
                }

                if ($possibleAnswer) {
                    $parts['possible_answer'][] = $node->C14N();
                }

                if (!$possibleAnswer && $node->localName != "details") {
                    $parts['question'][] = $node->C14N();
                }
            }

            var_dump($parts['dirname']);
            die();

        }


        /**
         * @var array{array{title:string, slug: string, questions: array{array{content:string, quiz: string, answers: array{array{content: string, is_correct: boolean, display_order: integer}} }}}} $quizData
         */
        return $quizData;
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
