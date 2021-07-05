<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'first_name' => 'admin',
            'last_name' => '7lex',
            'email' => 'admin@7lex.com',
            'password' => bcrypt('JoeBlack2021'),
            'role_id' => 1
        ]);

//        User::create([
//            'first_name' => 'lawyer1',
//            'last_name' => 'lawyer1 last name',
//            'email' => 'lawyer1@mail.com',
//            'password' => bcrypt('123'),
//            'role_id' => 2
//        ]);
//
//        User::create([
//            'first_name' => 'client1',
//            'last_name' => 'user last name',
//            'email' => 'client1@mail.com',
//            'password' => bcrypt('123'),
//            'role_id' => 3
//        ]);
    }
}
