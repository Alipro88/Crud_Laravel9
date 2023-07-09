<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       

        Post::create([
            'dateDePublication' => now(),
            'description' => ' trajet casa - fes',
            'image' => 'exemple2.jpg',
            'user_id' => 1,
            'comment' => 'zone non fumeurs , perssonnes sympas',
            'date_de_depart' => '2021-06-18',
        ]);
        Post::create([
            'dateDePublication' => now(),
            'description' => 'trajet fes - casa',
            'image' => 'example1.jpg',
            'user_id' => 1,
            'comment' => 'zone non fumeurs , perssonnes sympas',
            'date_de_depart' => '2021-06-22',
        ]);

        Post::create([
            'dateDePublication' => now(),
            'description' => 'trajet tanger - casa',
            'image' => 'example2.jpg',
            'user_id' => 1,
            'comment' => 'zone non fumeurs , perssonnes sympas',
            'date_de_depart' => '2021-06-22',
        ]);
        Post::create([
            'dateDePublication' => now(),
            'description' => 'trajet oujda - dakhla',
            'image' => 'example2.jpg',
            'user_id' => 1,
            'comment' => 'zone non fumeurs , perssonnes sympas',
            'date_de_depart' => '2021-06-23',
        ]);
        Post::create([
            'dateDePublication' => now(),
            'description' => 'trajet ain sebaa - sebata',
            'image' => 'example2.jpg',
            'user_id' => 1,
            'comment' => 'zone non fumeurs , perssonnes sympas',
            'date_de_depart' => '2021-06-24',
        ]);
        Post::create([
            'dateDePublication' => now(),
            'description' => 'trajet ain sebaa - sebata',
            'image' => 'example2.jpg',
            'user_id' => 1,
            'comment' => 'zone non fumeurs, 2 pessonnes  , perssonnes sympas',
            'date_de_depart' => '2021-06-25',
        ]);
    }
}
