<?php
namespace App\Markdown;

class QuizGenerator
{
    private array $filePaths;

    public function __construct(private FetcherInterface $fetcher)
    { }

    public function generate(): void
    {
        $this->filePaths = $this->fetcher->fetch();
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

    public function getDataSets(): array
    {
        $dataSets = [];
        foreach($this->filePaths as $filePath){
            $dataSets[] = [
                'id' => $this->generateIDFromFilePath($filePath),
                'name' => $this->generateNameFromFilePath($filePath),
                'file_path' => $filePath
            ];
        }
        return $dataSets;
    }
}