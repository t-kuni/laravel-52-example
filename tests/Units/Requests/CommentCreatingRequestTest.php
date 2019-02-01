<?php

use App\Http\Requests\CommentCreatingRequest;

class CommentCreatingRequestTest extends TestCase
{
    private function throughValidator($data)
    {
        $request = new CommentCreatingRequest();
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
