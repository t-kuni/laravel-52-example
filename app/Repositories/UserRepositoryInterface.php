<?php

namespace App\Repositories;

interface UserRepositoryInterface
{
    public function createUser($email, $password);
}
