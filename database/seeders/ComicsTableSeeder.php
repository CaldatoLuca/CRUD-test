<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //importo da config l' array coi dati
        $comics_array = config('comics');

        //ciclo sull' array
        //inserisco nella nuova istanza comic i dati dei singoli comic_element
        foreach ($comics_array as $comic_element) {
            //creo la nuova istanza
            $comic = new Comic();

            //riempio la tabella coi dati dell' array
            $comic->title = $comic_element['title'];
            $comic->description = $comic_element['description'];
            $comic->thumb = $comic_element['thumb'];
            $comic->price = $comic_element['price'];
            $comic->series = $comic_element['series'];
            $comic->sale_date = $comic_element['sale_date'];
            $comic->type = $comic_element['type'];

            //salvo la nuova istanza sul db
            $comic->save();
        }
    }
}
