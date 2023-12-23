<?php
use PHPUnit\Framework\TestCase;
require "./src/login_submit.php";
class UnitTest extends TestCase{

    public function testLoginPost(){

        $response = $this->call('POST', '/login.php', [
            'email' => 'badUsername@gmail.com',
            'password' => '123456',
            '_token' => csrf_token()
        ]);
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals('auth.login', $response->original->name());
    }

    public function testBasicTest()
    {
        $this->assertTrue(true);
    }
}
