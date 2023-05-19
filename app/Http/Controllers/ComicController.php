<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    private $layoutComponents;
    /*The __construct() function is a special method in PHP classes that is automatically called when an object of the class is created. It is used for initializing object properties or performing any setup tasks that need to be done before using the object.*/


    public function __construct()
    {
        $this->layoutComponents = [
            'footerItems' => config('footerItems'),
            'navbarTop' => config('navbarTop'),
            'navbar' => config('navbar'),
            'dcFeatures' => config('dcFeatures'),
            'dcNavbarBottom' => config('dcNavbarBottom')
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics/index', array_merge(compact('comics'), $this->layoutComponents));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Comic $comic)
    {
        return view('comics/create', array_merge(compact('comic'), $this->layoutComponents));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreComicRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        // Perform an authorization check
        $formData = $request->all();
        $formData['price'] = '$' . number_format($formData['price'], 2);


        $newComic = new Comic();
        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    // qui passiamo un oggetto dell'istanza Comic
    public function show(Comic $comic)
    {
        return view('comics/show', array_merge(compact('comic'), $this->layoutComponents));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {


        $price = str_replace('$', '', $comic->price);
        $numericPrice = floatval($price);

        return view('comics/edit', array_merge(compact('comic', 'numericPrice'), $this->layoutComponents));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComicRequest  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $this->validation($request);

        $formData = $request->all();

        // Add the dollar sign ('$') to the price and pad with two decimal zeros
        $formData['price'] = '$' . number_format($formData['price'], 2, '.', '');

        $comic->update($formData);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    // custom method
    private function validation($request)
    {
        // dobbiamo prendere solo i parametri del form, utilizziamo quindi il metodo all()
        $formData = $request->all();


        $validator = Validator::make($formData, [

            'title' => 'required|max:50|min:4',
            'description' => 'required',
            'thumb' => 'required|max:500',
            'price' => 'required|max:10',
            'series' => 'required|max:100',
            'sale_date' => 'required',
            'type' => 'required|max:30',
            'artists' => 'required',
            'writers' => 'required',
        ], [
            // dobbiamo inserire qui un insieme di messaggi da comunicare all'utente per ogni errore che vogliamo modificare
            'title.required' => 'Inserisci un titolo',
            'title.max' => 'Il titolo non deve essere più lungo di 50 caratteri',
            'title.min' => 'Il titolo non deve essere più corto di 5 caratteri',
            'description.required' => "La descrizione del fumetto deve essere indicata",
            'thumb.required' => "Il link dell'immagine deve essere indicato",
            'price.required' => "Il prezzo del fumetto deve essere indicato",
            'price.max' => "Il prezzo del fumetto deve essere di massimo 10 cifre",
            'series.required' => "Il valore 'series' deve essere indicato",
            'series.max' => "Il valore 'series' deve essere di massimo 10 caratteri",
            'sale_date.required' => "IL valore della data di lancio deve essere indicato",
            'type.required' => "Il valore 'type' deve essere indicato",
            'type.max' => "Il valore 'type' può essere al massimo di 30 caratteri",
            'artists.required' => 'Indica almeno un artista',
            'writers.required' => 'Indica almeno uno sceneggiatore',
        ])->validate();

        // we need to return a value because we are inside a function
        return $validator;
    }
}
