<?php

namespace App\Markdown;

interface GeneratorInterface
{
    /**
     * @param string $source
     * @return array
     */
    public function generate(string $source): array;

    /**
     * @param string[] $filePaths
     * @return array
     */
    public function process(array $filePaths): array;
}
