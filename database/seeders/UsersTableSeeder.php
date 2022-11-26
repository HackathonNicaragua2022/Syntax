<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Steven Ulloa',
            'email' => 'stevenullos6@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('stevenullos6@gmail.com'), // password
            'role' => 'admin',
        ]);
        User::factory()
            ->count(100)
            ->create();
    }
}
