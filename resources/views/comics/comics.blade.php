@extends('layout/main')

@section('content')
<section class="main">
    
    <div class="container">

        <div class="upper-title-wrapper">
            <h4 class="upper-title">Current Series</h4>
        </div>

        <div class="_container-inner">
            
            {{-- AGGIUNTA COMIC --}}
            <a class="btn btn-primary" href="{{route('comics.create')}}">aggiungi un nuovo Volume</a>
            {{-- AGGIUNTA COMIC --}}

            <div class="current-series">
                @foreach ($comics as $singleComic)
                <a href="{{route('comics.show', $singleComic->id)}}" class="_card">
                    <div class="img-wrapper">
                        <img src="{{$singleComic["thumb"]}}" alt="Copertina">
                    </div>
    
                    <h5 class="series-card">{{$singleComic["series"]}}</h5>
{{-- 
                    <br>

                    <span class="title-card">{{$singleComic["title"]}}</span> --}}
                </a>
                @endforeach
            </div>
            <button class="_btn">Load More</button>
        </div>
    </div>

</section>

<section class="blue-banner">

    <div class="container">
        <div class="container-inner">
            @foreach($configurationData[3] as $item)

            <div class="blue-banner-item">
                <div class="icon-wrapper">
                    <img src="{{ Vite::asset($item['img']) }}" alt="icon blue banner">
                </div>

                <div class="title">{{$item['name']}}</div>
            </div>

            @endforeach
        </div>
    </div>
    
</section>

@endsection