<?php

namespace App\Http\Controllers;

use App\Models\DCComic;
use Illuminate\Http\Request;

class DCComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $d_c_comics = DCComic::all();
      return view('comics.index', compact('d_c_comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //* form per aggiungere un nuovo prodotto
      return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //* qui vengono ricevuti i dati inviati dal form e si ottengono con $request->all()
      $form_data = $request->all();
      // dd($form_data);

      $new_comic = new DCComic;
//*soluzione 1
      // $new_comic->title = $form_data['title'];
// lo slug deve essere generato in modo automatico ogni volta che viene creato un nuovo prodotto quindi è stata creata un funzione nel model
      // $new_comic->slug = DCComic::generateSlug($new_comic->title);
      // $new_comic->description = $form_data['description'];
      // $new_comic->thumb = $form_data['thumb'];
      // $new_comic->price = $form_data['price'];
      // $new_comic->series = $form_data['series'];
      // $new_comic->sale_date = $form_data['sale_date'];
      // $new_comic->type = $form_data['type'];
      // $new_comic->artists = $form_data['artists'];
      // $new_comic->writers = $form_data['writers'];

//*soluzione 2 con il metodo fill
// lo slug deve essere generato in modo automatico ogni volta che viene creato un nuovo prodotto quindi è stata creata un funzione nel model
      $form_data['slug'] = DCComic::generateSlug($form_data['title']);
// con fill i dati vengono salvati tramite le chiavi salvate nel model in protected $fillable in modo da fare l'associazione chiave-valore automaticamente
      $new_comic->fill($form_data);

      // dd($new_comic);

      // viene salvato il prodotto
      $new_comic->save();
      // viene mostrata la pagina del dettaglio del prodotto appena creato
      return redirect()->route('d_c_comics.show', $new_comic);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DCComic  $dCComic
     * @return \Illuminate\Http\Response
     */
    //* di default (soluzione migliore)
    //! MA BISOGNA USARE IL PARAMETRO DI DEFAULT (in questo caso $dCComic) e non può essere modificato
    public function show(DCComic $dCComic)
    {
      // dd($dCComic);
      return view('comics.show', compact('dCComic'));
    }
    // OPPURE con id
    // public function show($id)
    // {
    //   $comic = DCComic::find($id);
    //   // dd($comic);
    //   return view('comics.show', compact('comic'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DCComic  $dCComic
     * @return \Illuminate\Http\Response
     */
    public function edit(DCComic $dCComic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DCComic  $dCComic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DCComic $dCComic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DCComic  $dCComic
     * @return \Illuminate\Http\Response
     */
    public function destroy(DCComic $dCComic)
    {
        //
    }
}
