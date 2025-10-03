<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movie::all();
        return view("index" , compact("movies"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Movie::create($request->all());

        return redirect()->route("index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $movie = Movie::findOrFail($id);
        return view("edit", compact("movie"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $movie = Movie::findOrFail($id);

          $movie->update($request->all());

         return redirect()->route("index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $movie = Movie::findOrFail($id);

          $movie->delete();

        return redirect()->back();
    }
}