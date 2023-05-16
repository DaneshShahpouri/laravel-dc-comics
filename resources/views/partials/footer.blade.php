<footer class="my-footer">

    <div class="top-footer">
         <div class="container">
            <div class="list-wrapper">
                @foreach ($configurationData[1] as $titleLink)
                <div classe="">
                    <span>{{$titleLink[0]}}</span>
                    <ul>
                        @foreach ($titleLink[1] as $link)
                        <li><a href="#">{{$link}} </a></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>

            <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
         </div>
    </div>

    <div class="bottom-footer">
        <div class="container">

            <div class="left-side">
                <button class="_btn">Sign-up Now!</button>
            </div>

            <div class="right-side">
                <span class="social">FOLLOW US</span>

                @foreach ($configurationData[2] as $item)
                <div class="social-icons-wrapper">
                    <i class="{{$item['iconClass']}}"></i>
                </div>
                @endforeach
            </div>

        </div>
    </div>

</footer>