@extends('layout/main')

@section('content')

<div class="container">
    {{-- @if ($errors->any)
    <ul class="container">
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            
            @endforeach
        </ul>
    @endif --}}
    
    <div class="m-4">
        <h1 class="title text-center">Modifica {{$comic->title}}</h1>
        
        <div class="container d-flex flex-column p-5">
            <form action="{{route('comics.update', $comic->id)}}" method="POST">
            @csrf
            @method('PUT')
        
            <div class="mb-2 d-flex flex-column ">
                <label for="title">Titolo</label>
                <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title') ?? $comic->title}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="description">Descrizione</label>
                <input class="form-control @error('description') is-invalid @enderror" type="text" id="description" name="description" value="{{old('description') ?? $comic->description}}">
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="thumb">Immagine</label>
                <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
                @error('thumb')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="price">Prezzo</label>
                <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{$comic->price}}">
                @error('price')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="series">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{$comic->series}}">
                @error('series')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="sale-date">Data di vendita</label>
                <input class="form-control @error('sale-date"') is-invalid @enderror" type="text" id="sale-date" name="sale-date" value="{{$comic->sale_date}}">
                @error('sale-date')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
        
            <div class="mb-2 d-flex flex-column">
                <label for="type">Tipo</label>
                <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{$comic->type}}">
                @error('type')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
               
        
                <button class="btn btn-primary" type="submit">Conferma</button>
            </form>
        </div>
    
    </div>
</div>
@endsection