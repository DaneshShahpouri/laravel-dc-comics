<?php

namespace App\Http\Controllers;

use App\Models\comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configurationData = config('data');
        $currentPage = 'comics';
        $comics = comic::all();

        return view('comics/comics', compact('configurationData', 'currentPage', 'comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $configurationData = config('data');
        $currentPage = 'comics';
        return view('comics/create', compact('configurationData', 'currentPage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $configurationData = config('data');
        $currentPage = 'comics';

        return view('comics/comicsShow', compact('comic', 'configurationData', 'currentPage', 'id'));
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
        $configurationData = config('data');
        $currentPage = 'comics';

        return view('comics/comicsEdit', compact('comic', 'configurationData', 'currentPage', 'id'));
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

        return redirect()->route('comics');
    }
}
