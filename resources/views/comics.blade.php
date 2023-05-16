@extends('layout/main')

@section('content')
<main class="home-main">
    <div class="blue-banner"></div>
    <div class="container">

        <div class="img-wrapper">
            <img src="{{$comics[0]["thumb"]}}" alt="">
        </div>

        <div class="main-content">
            <div class="description">
                <h2 class="title">{{$comics[0]["title"]}}</h2>
            </div>

            <div class="adv-banner">
                <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
            </div>
        </div>


    </div>
</main>
@endsection