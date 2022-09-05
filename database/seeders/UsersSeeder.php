<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ahmed Abdelrhim',
            'email' => 'aabdelrhim974@gmail.com',
            'password' => bcrypt('12345678'),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}