<?php
namespace App\Markdown;

class QuizFetcher implements FetcherInterface
{
    /**
     * @param string $source
     * @return string[]
     */
    public function fetch(string $source): array
    {
        $fullPath = dirname(__DIR__) . '/..' . $source;
        $directories = glob($fullPath . '/*' , GLOB_ONLYDIR);
        if(!$directories){
            return [];
        }

        $data = [];
        foreach($directories as $directory){
            $data[] = str_replace('/var/www/html/src/..',  '', $directory);
        }

        return $data;
    }


}