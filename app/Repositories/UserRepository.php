<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    //

    public function createUser($email, $password)
    {
        $user = new User();
        $user->email = $email;
        $user->password = $password;
        return $user->save();
    }
}
