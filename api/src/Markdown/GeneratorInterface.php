<?php

namespace App\Markdown;

use App\Markdown\Model\Question;
use App\Markdown\Model\Quiz;

interface GeneratorInterface
{
    /**
     * @param string $source
     * @return array<int, Quiz>|array<int, Question>
     */
    public function generate(string $source): array;

    /**
     * @param string[] $filePaths
     * @return array<int, Quiz>|array<int, Question>
     */
    public function process(array $filePaths): array;
}
