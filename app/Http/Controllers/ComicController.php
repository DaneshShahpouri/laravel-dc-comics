<?php

namespace App\Http\Controllers;

use App\Models\comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currentPage = 'comics';
        $comics = comic::all();

        return view('comics/comics', compact('currentPage', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currentPage = 'comics';
        return view('comics/create', compact('currentPage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validation($request);

        $form_comic = $request->all();

        $newComic = new comic();
        $newComic->title = $form_comic['title'];
        $newComic->description = $form_comic['description'];
        $newComic->thumb = $form_comic['thumb'];
        $newComic->price = $form_comic['price'];
        $newComic->series = $form_comic['series'];
        $newComic->sale_date = $form_comic['sale-date'];
        $newComic->type = $form_comic['type'];

        $newComic->save();

        return  redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = comic::findOrFail($id);
        $currentPage = 'comics';

        return view('comics/comicsShow', compact('comic', 'currentPage', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = comic::findOrFail($id);
        $currentPage = 'comics';

        return view('comics/comicsEdit', compact('comic', 'currentPage', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, comic $comic)
    {
        $this->validation($request);

        $form_data = $request->all();

        //dd($form_data);

        $comic->update($form_data);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation(Request $request)
    {
        $formData = $request->all();
        $validator = Validator::make($formData, [
            'title' => 'required|max:150',
            'description' => 'nullable',
            'thumb' => 'nullable|image|max:255',
            'price' => 'required|max:10',
            'series' => 'nullable|max:70',
            'sale_date' => 'required|date|max:10',
            'type' => 'nullable|max:100',
        ], [
            'title.required' => "Titolo necessario per continuare",
            'title.max' => "Titolo troppo lungo, non deve superare i 150 caratteri",
            'price.required' => "Prezzo necessario per continuare",
            'price.max' => "Prezzo troppo lungo, non deve superare i 10 caratteri",
            'sale_date.required' => "Data di lancio necessaria per continuare",
            'sale_date.max' => "Data di lancio troppo lunga, non deve superare i 10 caratteri",
        ])->validate();

        return $validator;
    }
}
