<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//* importare il modello
use App\Models\DCComic;

class DCComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $comics = config('comics');
      // dump($comics);
      //* dopo: php artisan db:seed --class=DCComicsTableSeeder
      foreach($comics as $comic){
        //* dichiaro new_comic salvando il modello
        $new_comic = new DCComic();

        //* ottengo i dati dell'array nel file comics
        $new_comic->title = $comic['title'];
        $new_comic->description = $comic['description'];
        $new_comic->thumb = $comic['thumb'];
        $new_comic->price = $comic['price'];
        $new_comic->series = $comic['series'];
        $new_comic->sale_date = $comic['sale_date'];
        $new_comic->type = $comic['type'];
        $new_comic->artists = implode($comic['artists']);
        $new_comic->writers = implode($comic['writers']);

        //! PER FARE UN CONTROLLO  dump($new_train);  + nel terminale: php artisan db:seed --class=DCComicsTableSeeder
        // dump($new_comic);

        //* per inviarli al database $new_train->save(); + nel terminale: php artisan db:seed --class=DCComicsTableSeeder
        $new_comic->save();
      }


    }
}
