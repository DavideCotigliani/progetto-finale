@extends('layouts.books')
@section('title', 'Modifica il post')
    
@section('content')
<form action="{{route("books.update", $book)}}" method="POST">
    @csrf 
    @method("PUT")
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title" value="{{$book->title}}">
    </div>

<div class="form-control mb-3 d-flex flex-column">
    <label for="author">Autore</label>
    <input type="text" name="author" id="author" value="{{$book->author}}">
</div>

<div class="form-control mb-3 d-flex flex-column">
    <label for="category">Categoria</label>
    <input type="text" name="category" id="category" value="{{$book->category}}">

</div>

<div class="form-control mb-3 d-flex flex-column">
<label for="content">Contenuto</label>
    <textarea name="content" id="content"  rows="5">{{$book->content}}</textarea>
</div>

<input type="submit" value="Salva">
</form>
@endsection