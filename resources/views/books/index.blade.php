@extends('layouts.books')
@section('title', 'Tutti i libri')
@section('content')
<table>
    <thead>
        <tr>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->category}}</td>
            <td><a href="{{route("books.show",$book->id)}}">Visualizza</a></td>
        </tr>
            @endforeach
    </tbody>
</table>
@endsection
    
