<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

//use Illuminate\Foundation\Testing\RefreshDatabase;

class CommentCreatingServiceTest extends TestCase
{
//    use DatabaseMigrations;
    use DatabaseTransactions;

    private $service;

    public function setUp()
    {
        parent::setUp();

        $userRepo = new \App\Repositories\UserRepository();
        $commentRepo = new \App\Repositories\CommentRepository();
        $this->service = new \App\Services\CommentCreatingService($userRepo, $commentRepo);
    }

    /**
     * A basic test example.
     *
     * @return void
     * @test
     */
    public function createComment()
    {
        $email = "example@example.com";
        $password = "password";
        $name = "私の名前";
        $body = "コメント本文";
        $this->service->createComment($email, $password, $name, $body);

        $this->seeInDatabase('users', [
            'email' => $email,
            'password' => $password,
        ]);
        $this->seeInDatabase('comments', [
            'name' => $name,
            'body' => $body,
        ]);
    }
}
