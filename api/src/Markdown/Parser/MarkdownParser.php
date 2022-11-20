<?php

namespace App\Markdown\Parser;

use App\Markdown\Extractor\DOMExtractor;
use App\Markdown\Model\Question;
use Parsedown;

class MarkdownParser
{
    public function __construct(private readonly Parsedown $parsedown, private readonly DOMExtractor $DOMExtractor)
    {
    }


    public function parser(Question $question): Question
    {
        $filePath = $question->getFilePath();
        $markdown = file_get_contents($filePath);

        $html = $this->parsedown->parse($markdown);

        $parts = $this->DOMExtractor->extract($html);

        $question->setContent($parts['question'])
            ->setCorrectAnswer($parts['correct_answer'])
            ->setPossibleAnswers($parts['possible_answers']);
        return $question;
    }
}
