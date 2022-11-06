<?php

namespace App\Markdown;

use App\Markdown\Model\Question;


class QuestionGenerator implements GeneratorInterface
{
    public function __construct(private readonly FetcherInterface $fetcher)
    {
    }

    public function getTitleFromFilePath(string $filePath): false|string
    {
        $index = 2;
        $filenameParts = explode('_', $filePath);
        if (!isset($filenameParts[$index])) {
            return false;
        }

        if (!is_string($filenameParts[$index])) {
            return false;
        }

        unset($filenameParts[0], $filenameParts[1]);
        $title = implode(' ', $filenameParts);
        $title = preg_replace('/\.md/i', '', $title);
        return ucfirst($title);
    }

    public function getIDFromFilePath(string $filePath, bool $isQuiz = true): false|int
    {
        $index = ($isQuiz) ? 0 : 1;
        $filenameParts = explode('_', $filePath);

        if (!isset($filenameParts[$index])) {
            return false;
        }

        if (!is_numeric($filenameParts[$index])) {
            return false;
        }

        return $filenameParts[$index];
    }

    /**
     * @param string $source
     * @return array{int, array{id: int, name: string, file_path: string}}
     */
    public function generate(string $source): array
    {
        $filePaths = $this->fetcher->fetch($source);
        return $this->process($filePaths);
    }

    /**
     * @param string[] $filePaths
     * @return array{int, array{id: int, name: string, file_path: string}}
     */
    public function process(array $filePaths): array
    {
        $dataSets = [];
        foreach ($filePaths as $filePath) {
            $quizID = $this->getIDFromFilePath($filePath);
            $questionID = $this->getIDFromFilePath($filePath, false);
            $title = $this->getTitleFromFilePath($filePath);
            $content = [];
            $possibleAnswers = [];
            $correctAnswers = [];
            $question = new Question($questionID, $quizID, $filePath, $title, $content, $possibleAnswers, $correctAnswers);

            $dataSets[] = $question;
        }
        return $dataSets;
    }
}