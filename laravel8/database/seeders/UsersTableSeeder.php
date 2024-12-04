<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => '日向','mail' => 'hinata@gmail.com','password' => bcrypt(12345678) ],
            ['username' => '影山','mail' => 'kageyama@gmail.com','password' => bcrypt(12345678)]
        ]);
    }
}
