<?php

namespace App\Markdown\Extractor;

use DOMDocument;
use DOMNode;

class DOMExtractor
{
    /** @var DOMNode[]  * */
    private array $question = [];
    /** @var DOMNode[]  * */
    private array $possibleAnswers = [];
    /** @var DOMNode[]  * */
    private array $correctAnswer = [];

    private bool $foundPossibleAnswers = false;
    private bool $foundCorrectAnswer = false;

    /**
     * @return array{question: DOMNode[], possible_answers: DOMNode[], correct_answer:DOMNode[] }
     */
    public function extract(string $document): array
    {
        $domDocument = new DOMDocument();
        libxml_use_internal_errors(true);
        $domDocument->loadHTML($document);

        $this->process($domDocument);

        return [
            'question' => $this->question,
            'possible_answers' => $this->possibleAnswers,
            'correct_answer' => $this->correctAnswer
        ];
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

    /** @return DOMNode[]  * */
    public function getQuestionNodes(): array
    {
        return $this->question;
    }

    /** @return DOMNode[]  * */
    public function getPossibleAnswerNodes(): array
    {
        return $this->possibleAnswers;
    }

    /** @return DOMNode[]  * */
    public function getCorrectAnswerNodes(): array
    {
        return $this->correctAnswer;
    }
}
