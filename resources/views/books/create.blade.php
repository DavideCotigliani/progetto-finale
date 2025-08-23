@extends('layouts.books')
@section('title', 'Aggiungi un post')
    
@section('content')
<form action="{{route("books.store")}}" method="POST" enctype="multipart/form-data">
    @csrf 
    
    <div class="form-control mb-3 d-flex flex-column">
        <label for="title">Titolo</label>
        <input type="text" name="title" id="title">
    </div>

<div class="form-control mb-3 d-flex flex-column">
    <label for="author">Autore</label>
    <input type="text" name="author" id="author">
</div>

<div class="form-control mb-3 d-flex flex-column">
    <label for="category">Categoria</label>
    <input type="text" name="category" id="category">
</div>

<div class="form-control mb-3 d-flex flex-column">
    <label for="publisher_id">Casa editrice</label>
    <select name="publisher_id" id="publisher_id">
        @foreach ($case as $casa)
            <option value="{{$casa->id}}">{{$casa->name}}</option>
        @endforeach
    </select>
</div>

<div class="form-control mb-3 d-flex flex-column">
    <label for="image">Immagine</label>
    <input type="file" name="image" id="image">
</div>


<div class="form-control mb-3 d-flex flex-column">
<label for="content">Contenuto</label>
    <textarea name="content" id="content"  rows="5"></textarea>
</div>

<input type="submit" value="Salva">
</form>
@endsection