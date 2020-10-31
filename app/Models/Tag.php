<?php

namespace App\Models;

class Tag
{
    private int $tagId;
    private int $articleId;
    private string $name;

    public function __construct(int $tagId, int $articleId, string $name)
    {
        $this->tagId = $tagId;
        $this->articleId = $articleId;
        $this->name = $name;
    }

    public function tagId(): int
    {
        return $this->tagId;
    }

    public function articleId(): int
    {
        return $this->articleId;
    }

    public function name(): string
    {
        return $this->name;
    }

}
