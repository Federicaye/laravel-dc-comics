@extends('layouts.app')
@section('title', 'comics')

@section('content')
<div class="select-comic">
  <form action="{{route('comic.index')}}" method="GET">
    <select name="type" id="">
      <option value="comic book">comic book</option>
      <option value="graphic novel">graphic novel</option>
      <option value="">all</option>
    </select>
    <input type="submit" value="search">
  </form>
</div>
<div class="w-25 m-auto">
<a href="{{route('comic.create')}}" class="w-100 m-4 btn-primary btn">create new item</a>
</div>
<div class="d-flex flex-wrap container container-comic">
  @foreach ($comics as $comic)

    <div class="comic">
    <a href="{{route('comic.show', $comic->id)}}"><img src="{{$comic->thumb}}" class="card-img-top comic-img"
      alt="$comic->title"> </a>
    <div class="card-body">
      <h5 class="card-title">{{$comic->title}}</h5>
      <div class="description">
      <p class="card-text">{{Str::limit($comic->description, 200)}}</p>
      </div>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ $comic->series}}</li>
      <li class="list-group-item">{{ $comic->type}}</li>
      <li class="list-group-item">{{ $comic->price}}$</li>
    </ul>
    <div class="card-body">

      <a href="{{route('comic.edit', $comic->id)}}" class="btn btn-primary">Edit</a>

      <form action="{{route('comic.destroy', $comic->id)}}" method="POST">
      @csrf
      @method('DELETE')
      <input type="submit" value="delete" id="delete-button" class="btn btn-danger">
      </form>
    </div>
    </div>



  @endforeach
</div>
@endsection