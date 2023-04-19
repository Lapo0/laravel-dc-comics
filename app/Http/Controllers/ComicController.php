<?php

namespace App\Http\Controllers;

use App\Models\Comic;

use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {

        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic) {

        return view('comics.show', compact('comic'));

    }

    public function create() {

        return view('comics.create');
    }

    public function store(Request $request) {

        $data = $request->validate(
            [
                'title' => 'required|max:255|min:1',
                'description' => 'required|string' ,
                'thumb' => 'required|max:255|url' ,
                'price' => 'required|numeric' ,
                'series' => 'required|max:255|min:1' ,
                'sale_date' => 'required|date' ,
                'type' => 'required|max:255|min:1' ,

            ]
        );

        $new_comic = Comic::create($data);

        return to_route('comics.show', $new_comic);
    }

    public function edit(Comic $comic) {

        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic) {

        $data = $request->validate(
            [
                'title' => 'required|max:255|min:5',
                'description' => 'required|string' ,
                'thumb' => 'required|max:255|url' ,
                'price' => 'required|numeric' ,
                'series' => 'required|max:255|min:1' ,
                'sale_date' => 'required|date' ,
                'type' => 'required|max:255|min:1' ,

            ]
        );

        // do la proprietà fillable e poi salvo i dati
        $comic->fill($data);

        $comic->save();

        // oppure posso fare entrambe le cose con la funzione update
        // $comic->update($data);

        return to_route('comics.show', $comic);
    }

    public function destroy(Comic $comic) {

        $comic->delete();

        return to_route('comics.index');
    }
}
