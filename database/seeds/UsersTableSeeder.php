<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // DB::table('users')->insert([
        //     'name' => 'loman',
        //     'email' => 'loman@gmail.com',
        //     'password' => bcrypt('secret'),
        //     'role' => 'author',
        // ]);

        User::create([
            'name' => 'Roman',
            'email' => 'kopylroman@gmail.com',
            'password' => bcrypt(env('AUTHOR_PASSWORD')),
            'role' => 'author',
        ]);
    }
}
