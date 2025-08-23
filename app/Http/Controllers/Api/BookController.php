<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        //prendo i libri dal db
        $books = Book::all();

        // aggiungi image_url per ogni libro
        $books->each(function ($book) {
            $book->image_url = $book->image ? asset('storage/' . $book->image) : null;
        });

        return response()->json(
            ["success" => true,
            "data" => $books
            ]
        );
    }

    public function show(Book $book)
    {
        $book->load('publisher');


        // aggiungi un campo image_url per React
        $book->image_url = $book->image ? asset('storage/' . $book->image) : null;


        return response()->json(
            ["success" => true,
                    "data" => $book
                    ]
        );


    }
}
