@extends('layout/main')

@section('content')
<section class="main">
    
    <div class="container">

        <div class="upper-title-wrapper">
            <h4 class="upper-title">Current Series</h4>
        </div>

        <div class="_container-inner">
            <div class="current-series">
                @foreach ($comics as $singleComic)
                <div class="_card">
                    <div class="img-wrapper">
                        <img src="{{$singleComic["thumb"]}}" alt="Copertina">
                    </div>
    
                    <span class="series-card">{{$singleComic["series"]}}</span>

                    <span class="title-card">{{$singleComic["title"]}}</span>

                    <br>
    
                    <span class="price-card">{{$singleComic["price"]}}</span>
                </div>
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