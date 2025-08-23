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

        return response()->json(
            ["success" => true,
            "data" => $books
            ]
        );
    }

    public function show(Book $book)
    {
        $book->load('publisher');

        return response()->json(
            ["success" => true,
                    "data" => $book
                    ]
        );


    }
}
