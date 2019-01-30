<?php

namespace App\Repositories;

use App\Models\Comment;

class CommentRepository implements CommentRepositoryInterface
{
    //

    public function createComment($name, $body)
    {
        $comment = new Comment();
        $comment->name = $name;
        $comment->body = $body;
        return $comment->save();
    }
}
