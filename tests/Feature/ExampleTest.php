<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     * 
     * 
     */

    protected function setUp() : void
    {
        parent::setUp(); 

        // データベースマイグレーション
        $this->artisan('migrate');

        // 必要に応じてテストデータ挿入
        $this->seed('PeopleTableSeeder');
    }

    public function testBasicTest()
    {


        $response = $this->get('/');
        $response->assertStatus(200);

    }
}
