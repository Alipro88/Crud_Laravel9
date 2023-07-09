<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User :: create([
            'name' => 'Ahmed',
            'email' => 'aliquamar@gmail.com',
            'password' => bcrypt('password'),
            'pwd' => 'ali',
        ]);
        User :: create([
            'name' => 'Yassine',
            'email' => 'ali45@gmail.com',
            'password' => bcrypt('password'),
            'pwd' => 'alito',
        ]);
        User :: create([
            'name' => 'taha',
            'email' => 'ali4590@gmail.com',
            'password' => bcrypt('password'),
            'pwd' => 'AKWA',
        ]);
    }
}
