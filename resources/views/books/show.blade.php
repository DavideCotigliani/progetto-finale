@extends('layouts.books')
@section('title', $book->title)
@section('content')
<div class="d-flex py-4 gap-2" >
    <a class="btn btn-warning" href="{{route ("books.edit", $book)}}">Modifica</a>
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
 Elimina
</button>

</div>
<h2>- {{$book->author}}</h2>
<small>{{$book->category}}</small>
<section>
    <p>
        {{$book->content}}
    </p>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elimina il post</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Vuoi eliminare il post?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
          <form action="{{route ("books.destroy", $book)}}" method="POST">
        @csrf
        @method("DELETE")
        <input type="submit" class="btn btn-danger" value="Elimina definitivamente" >
    </form>
      </div>
    </div>
  </div>
</div>
@endsection