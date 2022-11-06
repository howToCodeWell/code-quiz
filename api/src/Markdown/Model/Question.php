<?php

namespace App\Markdown\Model;

use DOMNode;

class Question implements ModelInterface
{
    /**
     * @param int $id
     * @param int $quizID
     * @param string $filePath
     * @param string $title
     * @param DOMNode[] $content
     * @param DOMNode[] $possibleAnswers
     * @param DOMNode[] $correctAnswer
     */
    public function __construct(
        private readonly int $id,
        private readonly int $quizID,
        private readonly string $filePath,
        private readonly string $title,
        private readonly array $content,
        private readonly array $possibleAnswers,
        private readonly array $correctAnswer,
    ) {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /** @return DOMNode[]  **/
    public function getContent(): array
    {
        return $this->content;
    }

    /** @return DOMNode[]  **/
    public function getPossibleAnswers(): array
    {
        return $this->possibleAnswers;
    }

    /** @return DOMNode[]  **/
    public function getCorrectAnswer(): array
    {
        return $this->correctAnswer;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }


    /**
     * @return int
     */
    public function getQuizID(): int
    {
        return $this->quizID;
    }
}
