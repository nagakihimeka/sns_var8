<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // usersTableSeeder.phpを呼び出すという記述。ないとダメ
         $this->call(UsersTableSeeder::class);
         $this->call(PostsTableSeeder::class);
    }
}
