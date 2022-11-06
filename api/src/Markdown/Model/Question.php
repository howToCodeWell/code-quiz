<?php

namespace App\Markdown\Model;

class Question implements ModelInterface
{

    public function __construct(
        private readonly int   $id,
        private readonly string $filePath,
        private readonly array $content,
        private readonly array $possibleAnswers,
        private readonly array $correctAnswer)
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @return array
     */
    public function getPossibleAnswers(): array
    {
        return $this->possibleAnswers;
    }

    /**
     * @return array
     */
    public function getCorrectAnswer(): array
    {
        return $this->correctAnswer;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }


}