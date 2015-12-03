<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        factory(User::class, 10)->create();
        factory(User::class, 5)->create(['password' => bcrypt('password')]);

        Model::reguard();
    }
}
