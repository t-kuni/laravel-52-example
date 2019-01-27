<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

//use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateCommentServiceTest extends TestCase
{
//    use DatabaseMigrations;
    use DatabaseTransactions;

    private $service;

    public function setUp()
    {
        $userRepo = new \App\Repositories\UserRepository();
        $commentRepo = new \App\Repositories\CommentRepository();
        $this->service = new \App\Services\CreateCommentService($userRepo, $commentRepo);
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
        $this->assertTrue(true);
    }
}
