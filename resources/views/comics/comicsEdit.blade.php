@extends('layout/main')

@section('content')

<div class="container">
    @if ($errors->any)
    <ul class="container">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            
            @endforeach
        </ul>
    @endif
    
    <div class="m-4">
        <h1 class="title text-center">Modifica {{$comic->title}}</h1>
        
        <div class="container d-flex flex-column p-5">
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
        
            <div class="mb-2 d-flex flex-column ">
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" value="{{$comic->title}}">
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="description">Descrizione</label>
                <input type="text" id="description" name="description" value="{{$comic->description}}">
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="thumb">Immagine</label>
                <input type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="price">Prezzo</label>
                <input type="text" id="price" name="price" value="{{$comic->price}}">
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="series">Serie</label>
                <input type="text" id="series" name="series" value="{{$comic->series}}">
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="sale-date">Data di vendita</label>
                <input type="text" id="sale-date" name="sale-date" value="{{$comic->sale_date}}">
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="type">Tipo</label>
                <input type="text" id="type" name="type" value="{{$comic->type}}">
            </div>
               
        
                <button class="btn btn-primary" type="submit">Conferma</button>
            </form>
        </div>
    
    </div>
</div>
@endsection