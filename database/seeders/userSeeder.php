<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin1234'),
            'gender' => 'male'
            ],
            [
            'name' => 'user1',
            'email' => 'user1@user.com',
            'password' => Hash::make('user1234'),
            'gender' => 'male'
            ],
            [
            'name' => 'user2',
            'email' => 'user2@user.com',
            'password' => Hash::make('user1234'),
            'gender' => 'male'
            ]
        ]);
    }
}
