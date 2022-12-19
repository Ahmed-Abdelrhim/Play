<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::query()->create([
            'name' => 'Ahmed Abdelrhim',
            'email' => 'abdelrhim.admin@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01152067271',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Author::query()->create([
            'name' => 'Ismail Ashraf',
            'email' => 'ismail@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01116520328',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);

        Author::query()->create([
        'name' => 'Ahmed Azzam',
        'email' => 'azzam@gmail.com',
        'password' => bcrypt('12345678'),
        'phone' => '01152067272',
        'created_at'=>now(),
        'updated_at'=>now(),
    ]);
        Author::query()->create([
            'name' => 'Omar Sandoby',
            'email' => 'sandoby@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01152067273',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);


        Author::query()->create([
            'name' => 'Anas Rabea',
            'email' => 'anas@gmail.com',
            'password' => bcrypt('12345678'),
            'phone' => '01014012312',
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }
}
