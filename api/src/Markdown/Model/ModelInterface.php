<?php

namespace App\Markdown\Model;

interface ModelInterface
{
    public function getId(): int;
    public function getFilePath(): string;
}
