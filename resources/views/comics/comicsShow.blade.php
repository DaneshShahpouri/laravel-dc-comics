@extends('layout/main')

@section('content')

{{-- MODAL --}}
<div class="buttons-wrapper" id="my-modal">
    <span>I File verranno eliminati <strong> definitivamente</strong>. <br>
    Sei sicuro di voler continuare?</span>
    <div class="d-flex align-items-center justify-content-center">

        <button id="deny-button" class="btn btn-secondary">Annulla</button>

        <form id="delete-conferm" action="{{route('comics.destroy', $comic->id)}}" method="POST">
            @csrf
            @method('DELETE')

            <input type="submit" class="btn btn-danger" value="Elimina">
        </form>
    </div>

</div>

<div id="layout-black"></div>
{{-- /MODAL --}}

<main id="home-main" class="home-main">
    <div class="blue-banner"></div>
    <div class="container">
        
        <div class="img-wrapper">
            <img src="{{$comic["thumb"]}}" alt="anteprima immagine">
        </div>

        <div class="main-content">
            <div class="container-fluid mx-0 description">
                <h2 class="title">{{$comic["title"]}}</h2>
                
                <div class="green-section p-2">
                    <strong class="text-white"><span>U.S. Price: </span>{{$comic['price']}}</strong>
                </div>

                <p class="p-2">{{$comic["description"]}}</p>
                <h4>Specifiche</h4>
    
                <div class="container-fluid d-flex flex-column">

                    <span><strong> Serie: </strong>{{$comic["series"]}}</span>
                    <span><strong> data di rilascio: </strong> {{$comic["sale_date"]}}</span>
                    <span><strong> Prezzo: </strong> {{$comic["price"]}}</span>
                    <span><strong> Tipo: </strong> {{$comic["type"]}}</span>

                </div>

                <div class="buttons d-flex justify-content-around m-5">
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary"><i class="fa-solid fa-pen-to-square"></i> Modifica</a>

                    <div id="delete-button" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Elimina</div>
                    
                </div>
              
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

<script>

    let deny_btn = document.getElementById('deny-button');
    let delete_btn = document.getElementById('delete-button');
    let modal = document.getElementById('my-modal');
    let layer = document.getElementById('layout-black');
 
    delete_btn.addEventListener('click', function(){
        modal.classList.toggle('open');
        layer.classList.toggle('open');
    });

    deny_btn.addEventListener('click', function(){
        modal.classList.toggle('open');
        layer.classList.toggle('open');
    });

    layer.addEventListener('click', function(){
        modal.classList.toggle('open');
        layer.classList.toggle('open');
    });

</script>

@endsection