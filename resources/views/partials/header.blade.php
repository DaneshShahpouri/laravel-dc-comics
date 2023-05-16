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
                <a href="">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                </a>
            </div>
    
            <ul class="nav-menu">
                @foreach ($configurationData[0] as $link)
                    <li class="{{$link==$currentPage ? 'activated' : ''}}"><a href="{{route($link)}}">{{$link}}</a></li>
                @endforeach
            </ul>
    
            <div class="search">
                <input type="text" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        </div>

    </div>
</nav>