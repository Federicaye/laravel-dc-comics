@extends('layouts.app')
@section('title', 'comics edit')
@section('content')
<form action="{{route('comic.update', $comic->id)}}">
    @csrf
    @method('PUT')
    <div class="container d-flex flex-column">
    <label for="title">title</label>
    <input type="text" name="title" value="{{$comic->title}}" required>

    <label for="description">description</label>
    <textarea name="description" id="">{{$comic->description}}</textarea>

    <label for="thumb">thumb</label>
    <input type="text" name="thumb" value="{{$comic->thumb}}" required>

    <label for="price">price</label>
    <input type="number" name="price" value="{{$comic->price}}" required>

    <label for="series">series</label>
    <input type="text" name="series" value="{{$comic->series}}" required>

    <label for="sale_date">saledate</label>
    <input type="date" name="sale_date" value="{{$comic->sale_date}}" required>

    <label for="type">type</label>
    <select name="type" id="">
        <option value="comic book" {{old('type', $comic->type === 'comic book' ? 'selected' : '')}}>comic book</option>
        <option value="graphic novel"  {{old('type', $comic->type === 'graphic novel' ? 'selected' : '')}}>graphic novel</option>
    </select>
    </div>

</form>
@endsection