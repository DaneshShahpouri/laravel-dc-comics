@extends('layout/main')

@section('content')

<div class="container">
    {{-- @if ($errors->any)
    <ul class="container">
        @foreach($errors->all() as $error)
            <li>errore: {{$error}}</li>
            
            @endforeach
        </ul>
    @endif --}}
    
    <h1 class="text-center title">Aggiungi un nuovo Comic</h1>
    
    <div class="container d-flex flex-column p-5">
        <form action="{{route('comics.store')}}" method="POST">
        @csrf
    
        <div class="mb-2 d-flex flex-column ">
            <label for="title">Titolo</label>
            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}">
            @error('title')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="description">Descrizione</label>
            <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" value="{{old('description')}}">
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="thumb">Immagine</label>
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb')}}">
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="price">Prezzo</label>
            <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price')}}">
            @error('price')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="series">Serie</label>
            <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series')}}">
            @error('series')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="sale-date">Data di vendita</label>
            <input class="form-control @error('sale-date') is-invalid @enderror" type="text" id="sale-date" name="sale-date" value="{{old('sale-date')}}">
            @error('sale-date')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
    
        <div class="mb-2 d-flex flex-column">
            <label for="type">Tipo</label>
            <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type')}}">
            @error('type')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>
           
    
            <button class="btn btn-primary" type="submit">ADD</button>
        </form>
    </div>

</div>

@endsection