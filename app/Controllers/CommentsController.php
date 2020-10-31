<?php

namespace App\Controllers;

use App\Models\Comment;

class CommentsController
{
    private array $comments;

    public function store(array $vars)
    {
        $articleId = (int)$vars['id'];

        query()
            ->insert('comments')
            ->values([
                'article_id' => ':articleId',
                'name' => ':name',
                'content' => ':content',
            ])
            ->setParameters([
                'articleId' => $articleId,
                'name' => $_POST['name'],
                'content' => $_POST['comment'],
            ])
            ->execute();

        header('Location: /articles/' . $articleId);
    }

    public function delete(array $vars)
    {
        query()
            ->delete('comments')
            ->where('id = :id')
            ->setParameter('id', $_POST['commentId'])
            ->execute();

        header('location: /articles/' . $vars['id']);
    }
}