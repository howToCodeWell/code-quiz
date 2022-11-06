<?php
namespace App\Markdown;

use App\Markdown\Model\Quiz;

class QuizGenerator implements GeneratorInterface
{
    public function __construct(private readonly FetcherInterface $fetcher)
    { }

    /**
     * @param string $source
     * @return Quiz[]
     */
    public function generate(string $source): array
    {
        $filePaths = $this->fetcher->fetch($source);
        return $this->process($filePaths);
    }

    /**
     * @param string $filePath
     * @return int
     */
    public function generateIDFromFilePath(string $filePath): int
    {
        $directoryLeaf = basename($filePath);
        $parts = explode('_', $directoryLeaf);
        return (int) $parts[0];
    }

    public function generateNameFromFilePath(string $filePath): string
    {
        $directoryLeaf = basename($filePath);
        $name = str_replace('_', ' ', $directoryLeaf);
        $firstSpace = strstr($name, ' ');
        if($firstSpace) {
            $name = ltrim($firstSpace, ' ');
        }
        return ucfirst($name);
    }

    /**
     * @param string[] $filePaths
     * @return array{int, array{id: int, name: string, file_path: string}}
     */
    public function process(array $filePaths): array
    {
        $dataSets = [];
        foreach ($filePaths as $filePath) {
            $id = $this->generateIDFromFilePath($filePath);
            $name = $this->generateNameFromFilePath($filePath);

            $quizModel = new Quiz($id, $name, $filePath);
            $dataSets[] = $quizModel;
        }
        return $dataSets;
    }
}