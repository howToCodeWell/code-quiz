<?php

namespace App\Markdown;

interface FetcherInterface
{
    /**
     * @param string $source
     * @return string[]
     */
    public function fetch(string $source): array;
}
