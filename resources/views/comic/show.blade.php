
@extends('layouts.app')
@section('title', 'comics')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <img src="{{$comic->thumb}}" alt="{{$comic->title}}" class="w-100">
        </div>
        <div class="col-8">
            <h3>{{$comic->title}}</h3>
            <h5>{{$comic->series}}</h5>
            <p>{{$comic->description}}</p>
            <p>{{$comic->price}}$</p>
            <p>{{$comic->type}}</p>
        </div>

    </div>


</div>
@endsection