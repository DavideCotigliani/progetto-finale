<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view("books.index", compact("books"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //prendo le case editrici
        $case = Publisher::all();

        return view('books.create', compact("case"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->all();

        $newBook = new Book();

        $newBook->title = $data['title'];
        $newBook->author = $data['author'];
        $newBook->category = $data['category'];
        $newBook->publisher_id = $data['publisher_id'];
        $newBook->content = $data['content'];

        $newBook->save();

        return redirect()->route("books.show", $newBook->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //prendiamo il libro specifico dal database
        return view("books.show", compact("book"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {

        //prendo le case editrici
        $case = Publisher::all();

        return view("books.edit", compact("book", "case"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {

        $data = $request->all();

        $book->title = $data['title'];
        $book->author = $data['author'];
        $book->category = $data['category'];
        $book->publisher_id = $data['publisher_id'];
        $book->content = $data['content'];

        $book->update();


        return redirect()->route("books.show", $book);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route("books.index");
    }
}
