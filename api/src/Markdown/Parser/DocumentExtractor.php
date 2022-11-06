<?php

namespace App\Markdown\Parser;

use DOMDocument;
use DOMNode;

class DocumentExtractor
{
    private array $question = [];
    private array $possibleAnswers = [];
    private array $correctAnswer = [];

    private bool $foundPossibleAnswers = false;
    private bool $foundCorrectAnswer = false;

    public function __construct(private readonly string $document)
    {
    }

    /**
     * @return void
     */
    public function extract(): void
    {
        $domDocument = new DOMDocument();
        libxml_use_internal_errors(true);
        $domDocument->loadHTML($this->document);
        libxml_get_errors();

        $this->process($domDocument);
    }

    public function process(DOMNode $domNode): void
    {
        foreach ($domNode->childNodes as $node) {
            if ($node->nodeName === '#text') {
                continue;
            }

            if ($node->nodeName === 'h2' && $node->nodeValue === 'Possible answers') {
                $this->foundPossibleAnswers = true;
            }

            if ($node->nodeName === 'details') {
                $this->foundCorrectAnswer = true;
            }

            // Get the question
            if (!$this->foundPossibleAnswers && !$this->foundCorrectAnswer) {
                if ($node->nodeName !== 'body' && $node->nodeName !== 'html') {
                    $this->question[] = $node;
                }
            }

            // Get the possible answers
            if ($this->foundPossibleAnswers && !$this->foundCorrectAnswer) {
                $this->possibleAnswers[] = $node;
            }

            // Get the answer
            if ($this->foundCorrectAnswer) {
                $this->correctAnswer[] = $node;
            }


            if ($node->hasChildNodes()) {
                $this->process($node);
            }
        }
    }

    public function getQuestionNodes(): array
    {
        return $this->question;
    }

    public function getPossibleAnswerNodes(): array
    {
        return $this->possibleAnswers;
    }

    public function getCorrectAnswerNodes(): array
    {
        return $this->correctAnswer;
    }
}
