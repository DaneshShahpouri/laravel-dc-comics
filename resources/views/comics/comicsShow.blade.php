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
                <h4>Specifiche</h4>
    
                <div class="container-fluid d-flex flex-column">

                    <span><strong> Serie: </strong>{{$comic["series"]}}</span>
                    <span><strong> data di rilascio: </strong> {{$comic["sale_date"]}}</span>
                    <span><strong> Prezzo: </strong> {{$comic["price"]}}</span>
                    <span><strong> Tipo: </strong> {{$comic["type"]}}</span>

                </div>

                <div class="buttons d-flex justify-content-around m-5">
                    <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-primary">Modifica</a>

                    <div id="delete-button" class="btn btn-danger">Elimina</div>
                    
                </div>
                
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

<script>
    let deny_btn = document.getElementById('deny-button');
    let delete_btn = document.getElementById('delete-button');
    let modal = document.getElementById('my-modal');

    console.log(deny_btn);
    console.log(delete_btn);

    function toggleClass(){
        if(modal.classList.contains('open')){
            modal.classList.remove('open')
        }else{
            modal.classList.add('open')
        }
    };

    delete_btn.addEventListener('click', ()=>{
        toggleClass();
    });

    deny_btn.addEventListener('click', ()=>{
        toggleClass();
    })
</script>

@endsection