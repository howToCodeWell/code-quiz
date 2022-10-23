<?php
namespace App\Markdown;

interface GeneratorInterface {
    public function generate(string $source): array;
    public function process(array $filePaths): array;
}