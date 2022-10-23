<?php
namespace App\Markdown;

class QuizGenerator implements GeneratorInterface
{
    public function __construct(private FetcherInterface $fetcher)
    { }

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
        $name = ltrim(strstr($name, ' '), ' ');
        return ucfirst($name);
    }

    public function process(array $filePaths): array
    {
        $dataSets = [];
        foreach($filePaths as $filePath){
            $dataSets[] = [
                'id' => $this->generateIDFromFilePath($filePath),
                'name' => $this->generateNameFromFilePath($filePath),
                'file_path' => $filePath
            ];
        }
        return $dataSets;
    }
}