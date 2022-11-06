<?php

namespace App\Markdown;

use Symfony\Component\Finder\Finder;

class QuestionFetcher implements FetcherInterface
{
    /**
     * Fetch all the question filenames from within a given quiz directory (source)
     *
     * @param string $source
     * @return string[]
     */
    public function fetch(string $source): array
    {
        $folderPath = dirname(__DIR__) . '/..' . $source;

        $filenames = [];
        $finder = new Finder();
        $files = $finder->files()->in($folderPath)->notName('index.md');
        foreach ($files as $file) {
            $filenames[] = $file->getFilename();
        }

        return $filenames;
    }
}
