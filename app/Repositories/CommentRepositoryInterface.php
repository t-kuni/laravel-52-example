<?php

namespace App\Repositories;

interface CommentRepositoryInterface
{
    public function createComment($name, $body);
}
