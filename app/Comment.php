<?php

namespace App;

class Comment
{
    private string $name;
    private string $comment;
    private ?string $date;

    public function __construct(string $name, string $comment)
    {
        $this->name = $name;
        $this->comment = $comment;
        $this->date = date("Y-m-d H:i:s");
    }

    public function getNameCommentDate(): array
    {
        return [$this->name, $this->comment, $this->date];
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getDate(): string
    {
        return $this->date;
    }
}