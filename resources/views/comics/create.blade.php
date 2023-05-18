@extends('layout/main')

@section('content')

<div class="container">
    @if ($errors->any)
    <ul class="container">
        @foreach($errors->all() as $error)
            <li>errore: {{$error}}</li>
            
            @endforeach
        </ul>
    @endif
    
    <h1 class="text-center title">Aggiungi un nuovo Comic</h1>
    
    <div class="container d-flex flex-column p-5">
        <form action="{{route('comics.store')}}" method="POST">
        @csrf
    
        <div class="mb-2 d-flex flex-column ">
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="description">Descrizione</label>
            <input type="text" id="description" name="description">
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="thumb">Immagine</label>
            <input type="text" id="thumb" name="thumb">
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price">
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="series">Serie</label>
            <input type="text" id="series" name="series">
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="sale-date">Data di vendita</label>
            <input type="text" id="sale-date" name="sale-date">
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="type">Tipo</label>
            <input type="text" id="type" name="type">
        </div>
           
    
            <button class="btn btn-primary" type="submit">ADD</button>
        </form>
    </div>

</div>

@endsection