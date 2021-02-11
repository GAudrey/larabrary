<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;
use Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Books::all();

        return view('library.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->isAdministrator()){
            return view('library.create');
        }
        else{
            abort(403);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'genre' => 'required',
            'quantity' => 'required'
        ]);

        Books::create([
            'author' => $request->author,
            'title' => $request->title,
            'genre' => $request->genre,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Books $book)
    {
        return view('library.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $book)
    {
        return view('library.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $book)
    {
        $request->validate([
            'author' => 'required',
            'title' => 'required',
            'genre' => 'required',
            'quantity' => 'required'
        ]);

        $book->update([
            'author' => $request->author,
            'title' => $request->title,
            'genre' => $request->genre,
            'quantity' => $request->quantity
        ]);

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $book)
    {
        $book->delete();

        return redirect()->route('books.index');
    }
}
