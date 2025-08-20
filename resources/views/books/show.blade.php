@extends('layouts.books')
@section('title', $book->title)
@section('content')
<h2>- {{$book->author}}</h2>
<small>{{$book->category}}</small>
<section>
    <p>
        {{$book->content}}
    </p>
</section>
@endsection