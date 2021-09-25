<?php

namespace App;

use League\Csv\Reader;
use League\Csv\Statement;
use League\Csv\Writer;

class CommentsDatabase
{
    private array $commentsAll = [];

    public function __construct()
    {
        $csv = Reader::createFromPath("comment_database.csv", 'r');
        $csv->setHeaderOffset(0);
        $stmt = Statement::create();
        $records = $stmt->process($csv);
        foreach ($records as $record) {
            $newComment = new Comment($record["name"], $record["comment"]);
            $newComment->setDate($record["date"]);
            $this->addComment($newComment);
        }
    }

    private function addComment(Comment $comment): void
    {
        $this->commentsAll[] = $comment;
    }

    public function addNewComment($name, $comment): void
    {
        $csv = Writer::createFromPath("comment_database.csv", "a+");
        $csv->insertOne((new Comment($name, $comment))->getNameCommentDate());
    }

    public function getCommentsAll(): array
    {
        return $this->commentsAll;
    }
}