@extends('layout/main')

@section('content')
<main class="home-main">
    <div class="blue-banner"></div>
    <div class="container">
        
        <div class="img-wrapper">
            <img src="{{$comic["thumb"]}}" alt="">
        </div>

        <div class="main-content">
            <div class="container-fluid mx-0 description">
                <h2 class="title">{{$comic["title"]}}</h2>
                
                <div class="green-section p-2">
                    <strong class="text-white"><span>U.S. Price:</span>{{$comic['price']}}</strong>
                </div>

                <p class="p-2">{{$comic["description"]}}</p>
            </div>


            <div class="a-banner d-flex flex-column">
                <h6>ADVERTISEMENT</h6>
                <img src="{{ Vite::asset('resources/img/advimg.jpg') }}" alt="advbanner">
            </div>
            
        </div>
      
      
    </div>  
</main>

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