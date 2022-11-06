<?php

namespace App\Markdown;

use App\Markdown\Model\Question;


class QuestionGenerator implements GeneratorInterface
{
    public function __construct(private readonly FetcherInterface $fetcher)
    {
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
            $id = $this->generateIDFromFilePath($filePath);
            $content = [];
            $possibleAnswers = [];
            $correctAnswers = [];
            $question = new Question($id, $filePath, $content, $possibleAnswers, $correctAnswers);

            $dataSets[] = $question;
        }
        return $dataSets;
    }
}