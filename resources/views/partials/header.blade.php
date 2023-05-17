<nav class="my-navbar">

    <div class="top-banner">
        <div class="container">

            <span>DC power Visa®</span>
       
            <div class="select-wrapper">
                <select>
                   <option value="0">addition DC sites</option>
                   <option value="1">DC WORLD!</option>
                   <option value="2">Universal dc.com</option>
                </select>
            </div>
        </div>
    </div>

    <div class="bottom-wrapper">

        <div class="container">

            <div class="logo">
                <a href="{{route('home')}}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                </a>
            </div>
    
            <ul class="nav-menu">
                <li class=""><a href="">character</a></li>
                <li class="{{$currentPage=='comics' ? 'activated':''}}"><a href="http://127.0.0.1:8000/comics">comics</a></li>
                <li class=""><a href="">movies</a></li>
                <li class=""><a href="">tv</a></li>
                <li class=""><a href="">games</a></li>
                <li class=""><a href="">collectibles</a></li>
                <li class=""><a href="">video</a></li>
                <li class=""><a href="">fans</a></li>
                <li class=""><a href="">news</a></li>
                <li class=""><a href="">shop</a></li>
        </ul>
    
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        </div>

    </div>
</nav>