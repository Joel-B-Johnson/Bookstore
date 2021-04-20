<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Return all instances of book
        return Book::all();
    }

    public function addnb()
    {
        
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
            'book_image' => 'required',
            'publisher' => 'required',
            'author' => 'required',
            'isbn' => 'required',
            'title' => 'required',
            'price' => 'required',
            'stock' => 'required'
        ]);

        //Anything that is allowed to be created will be
        return Book::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Book::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $book = Book::find($id);
        $book -> update($request->all());
        return $book;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Book::destroy($id);
    }

    /**
     * Search for a book title
     *
     * @param  str $title
     * @return \Illuminate\Http\Response
     */
    public function search($title)
    {
        //
        return Book::where('title', 'like', '%'.$title.'%')->get();
    }
}
