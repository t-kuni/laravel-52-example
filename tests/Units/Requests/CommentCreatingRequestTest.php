<?php

class CommentCreatingRequestTest extends TestCase
{
    protected static $REQUEST_CLASS = \App\Http\Requests\CommentCreatingRequest::class;

    public function setUp()
    {
        parent::setUp();

        $this->request = new \App\Http\Requests\CommentCreatingRequest();
    }

    private function throughValidator($data)
    {
        $request = new (static::REQUEST_CLASS)();
        $rules = $request->rules();
        $validator = Validator::make($data, $rules);
        return $validator->passes();
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function testExample($data, $expect)
    {
        $result = $this->throughValidator($data);
        $this->assertEquals($expect, $result);
    }

    public function dataProvider()
    {
        return [
            '正常' => [
                [
                    'email' => 'aaa',
                    'password' => 'aaa',
                    'name' => 'aaa',
                    'body' => 'aaa',
                ],
                true
            ]
        ];
    }
}
