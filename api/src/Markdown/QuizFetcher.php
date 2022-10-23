<?php
namespace App\Markdown;

class QuizFetcher implements FetcherInterface
{
    public function fetch(string $source): array
    {
        $fullPath = dirname(__DIR__) . '/..' . $source;
        $directories = glob($fullPath . '/*' , GLOB_ONLYDIR);

        $data = [];
        foreach($directories as $directory){
            $data[] = str_replace('/var/www/html/src/..',  '', $directory);
        }

        return $data;
    }


}