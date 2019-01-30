<?php

namespace App\Services;

use App\Repositories\CommentInterface;
use App\Repositories\UserInterface;

interface CommentCreatingInterface
{
    public function createComment($email, $password, $name, $body);
}
