<?php

namespace Database\Seeders;

use App\Models\comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comicsArray = config('comics');
        for ($i = 0; $i < count($comicsArray); $i++) {
            $newComic = new comic();

            $newComic->title = $comicsArray[$i]['title'];
            $newComic->description = $comicsArray[$i]['description'];
            $newComic->thumb = $comicsArray[$i]['thumb'];
            $newComic->price = $comicsArray[$i]['price'];
            $newComic->series = $comicsArray[$i]['series'];
            $newComic->sale_date = $comicsArray[$i]['sale_date'];
            $newComic->type = $comicsArray[$i]['type'];

            $newComic->save();
        }
    }
}
