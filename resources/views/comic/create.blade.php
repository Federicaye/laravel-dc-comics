@extends('layouts.app')
@section('title', 'create')

@section('content')

<form action="{{route('comic.store')}}" method="GET">
@csrf
<div class="container d-flex flex-column">
    <label for="title">title</label>
    <input type="text" name="title" value="{{old('title')}}" required>

    <label for="description">description</label>
    <textarea name="description" id="">{{old('description')}}</textarea>

    <label for="thumb">thumb</label>
    <input type="text" name="thumb" value="{{old('thumb')}}" required>

    <label for="price">price</label>
    <input type="number" name="price" value="{{old('price')}}" required>

    <label for="series">series</label>
    <input type="text" name="series" value="{{old('series')}}" required>

    <label for="sale_date">saledate</label>
    <input type="date" name="sale_date" value="{{old('sale_date')}}" required>

    <label for="type">type</label>
    <select name="type" id="">
        <option value="comic book" {{old('type')}}>comic book</option>
        <option value="graphic novel"  {{old('type')}}>graphic novel</option>
    </select>
     
    </div>
    
    <div class="m-auto w-25 d-flex mt-3 gap-2">
    <button  type="submit" class="btn btn-primary w-50">Crea</button>
        <button  type="reset" class="btn btn-danger w-50">Annulla</button>
    </div>
</form>
@endsection