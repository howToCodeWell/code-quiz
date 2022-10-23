<?php
namespace App\Markdown;

class QuizFetcher implements FetcherInterface
{
    public function fetch(): array
    {
        $filePath = '/config/fixtures/quizzes';
        $baseDir = dirname(__DIR__) . '/..' . $filePath;

        $directories = glob($baseDir . '/*' , GLOB_ONLYDIR);

        $data = [];
        foreach($directories as $directory){
            $data[] = str_replace('/var/www/html/src/..',  '', $directory);
        }

        return $data;
    }


}