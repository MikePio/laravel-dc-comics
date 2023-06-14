<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// per generare lo slug in questo caso
use Illuminate\Support\Str;

class DCComic extends Model
{
  use HasFactory;

  protected $fillable = [
    'title',
    'slug',
    'description',
    'thumb',
    'price',
    'series',
    'sale_date',
    'type',
    'artists',
    'writers'
  ];

  //* funzione per generare uno slug univoco
  public static function generateSlug($str){

    $slug = Str::slug($str, '-');
    $original_slug = $slug;

    $slug_exists = DCComic::where('slug', $slug)->first();
    // contatore
    $c = 1;

    //controllo di univocità
    // 1. controllo se lo slug è già presente
    // 2. se non è presente ritorno sullo slug generato
    // 3. se è presente aggiungo un contatore
    // 4. se anche il numero del contatore è presente aggiungo +1 al contatore fino a trovare uno slug univoco

    while($slug_exists){
      $slug = $original_slug . '-' . $c;
      $slug_exists = DCComic::where('slug', $slug)->first();
      $c++;
    }

    return $slug;
  }




}

