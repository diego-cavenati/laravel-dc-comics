<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateComicRequest;
use App\Http\Requests\StoreComicRequest;
use App\Models\Comic;
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
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        // Validate data
        $val_data = $request->validate();

        // Save all data
        $comic = Comic::create($val_data);

        // $comic = new Comic();
        // $comic->title = $request['title'];
        // $comic->description = $request['description'];
        // $comic->thumb = $request['thumb'];
        // $comic->price = $request['price'];
        // $comic->series = $request['series'];
        // $comic->sale_date = $request['sale_date'];
        // $comic->type = $request['type'];
        // $comic->save();

        return to_route('comics.index')->with('message', "$comic->title added successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('admin.comics.show', compact($comic));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        // $comic = Comic::find($id);
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {

        // $data = [
        //     'title' => $request['title'],
        //     'description' => $request['description'],
        //     'thumb' => $request['thumb'],
        //     'type' => $request['type'],
        //     'price' => $request['price'],
        //     'series' => $request['series'],
        //     'sale_date' => $request['sale_date'],
        // ];

        $val_data = $request->validate();
        $comic->update($val_data);

        return to_route('comics.index', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
