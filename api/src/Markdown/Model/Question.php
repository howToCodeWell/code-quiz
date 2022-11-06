<?php

namespace App\Markdown\Model;

use DOMNode;

class Question implements ModelInterface
{
    /** @var DOMNode[] * */
    private array $correctAnswer = [];
    /** @var DOMNode[] * */
    private array $content = [];
    /** @var DOMNode[] * */
    private array $possibleAnswers = [];

    /**
     * @param int $id
     * @param int $quizID
     * @param string $filePath
     * @param string $title
     */
    public function __construct(
        private readonly int $id,
        private readonly int $quizID,
        private readonly string $filePath,
        private readonly string $title
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

    /** @return DOMNode[]  * */
    public function getContent(): array
    {
        return $this->content;
    }

    /**
     * @param DOMNode[] $content
     * @return Question
     */
    public function setContent(array $content): Question
    {
        $this->content = $content;
        return $this;
    }

    /** @return DOMNode[]  * */
    public function getPossibleAnswers(): array
    {
        return $this->possibleAnswers;
    }

    /**
     * @param DOMNode[] $possibleAnswers
     * @return Question
     */
    public function setPossibleAnswers(array $possibleAnswers): Question
    {
        $this->possibleAnswers = $possibleAnswers;
        return $this;
    }

    /** @return DOMNode[]  * */
    public function getCorrectAnswer(): array
    {
        return $this->correctAnswer;
    }

    /**
     * @param DOMNode[] $correctAnswer
     * @return Question
     */
    public function setCorrectAnswer(array $correctAnswer): Question
    {
        $this->correctAnswer = $correctAnswer;
        return $this;
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
