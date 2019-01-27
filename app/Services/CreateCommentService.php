<?php

namespace App\Services;

use App\Repositories\CommentRepository;
use App\Repositories\UserRepository;

class CreateCommentService
{
    //
    public function __construct(UserRepository $userRepo, CommentRepository $commentRepo)
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
