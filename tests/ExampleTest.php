<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;


    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $jake = factory('App\User')->create(['name' => 'Jake', 'password' => bcrypt('password')]);

        $this->actingAs($jake)
            ->visit('admin')
            ->see('Hello Jake');
    }
}
