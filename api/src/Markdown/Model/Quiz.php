<?php

namespace App\Markdown\Model;

class Quiz
{

    public function __construct(
        private readonly int    $id,
        private readonly string $name,
        private readonly string $filePath
    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getFilePath()
    {
        return $this->filePath;
    }


}