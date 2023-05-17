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
            
            <div class="blue-banner-item">
                <div class="icon-wrapper">
                    <img src="http://[::1]:5173/resources/img/buy-comics-digital-comics.png" alt="icon blue banner">
                </div>

                <div class="title">Digital comics</div>
            </div>

            
            <div class="blue-banner-item">
                <div class="icon-wrapper">
                    <img src="http://[::1]:5173/resources/img/buy-comics-merchandise.png" alt="icon blue banner">
                </div>

                <div class="title">DC Merchandise</div>
            </div>

            
            <div class="blue-banner-item">
                <div class="icon-wrapper">
                    <img src="http://[::1]:5173/resources/img/buy-comics-subscriptions.png" alt="icon blue banner">
                </div>

                <div class="title">Subscription</div>
            </div>

            
            <div class="blue-banner-item">
                <div class="icon-wrapper">
                    <img src="http://[::1]:5173/resources/img/buy-comics-shop-locator.png" alt="icon blue banner">
                </div>

                <div class="title">Comic Shop Locator</div>
            </div>

            
            <div class="blue-banner-item">
                <div class="icon-wrapper">
                    <img src="http://[::1]:5173/resources/img/buy-dc-power-visa.svg" alt="icon blue banner">
                </div>

                <div class="title">Dc Power Visa</div>
            </div>

                    </div>
    </div>
</section>

@endsection