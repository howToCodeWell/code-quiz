<?php
namespace App\Markdown;

interface FetcherInterface {
    public function fetch(string $source): array;
}