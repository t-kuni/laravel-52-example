<?php

namespace App\Services;

use App\Repositories\CommentInterface;
use App\Repositories\CommentRepositoryInterface;
use App\Repositories\UserInterface;
use App\Repositories\UserRepositoryInterface;

class CommentCreatingService
{
    public function __construct(UserRepositoryInterface $userRepo, CommentRepositoryInterface $commentRepo)
    {
        $this->userRepo = $userRepo;
        $this->commentRepo = $commentRepo;
    }

    public function createComment($email, $password, $name, $body)
    {
        $this->userRepo->createUser($email, $password);
        $this->commentRepo->createComment($name, $body);
    }
}
