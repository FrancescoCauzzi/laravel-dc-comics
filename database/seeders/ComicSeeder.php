<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic; // Import the Comic model

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');
        foreach ($arrayComics as $comic) {
            Comic::create([
                'title' => $comic['title'],
                'description' => $comic['description'],
                'thumb' => $comic['thumb'],
                'price' => $comic['price'],
                'series' => $comic['series'],
                'sale_date' => $comic['sale_date'], 'type' => $comic['type'],
                'artists' => implode(", ", $comic['artists']),
                'writers' => implode(", ", $comic['writers']),
            ]);
        }
    }
}
