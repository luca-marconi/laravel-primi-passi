<header>
    <img class="logo" src="{{asset('img/marchio-sito-test.png')}}" alt="">
    <nav>
        <i class="fas fa-bars"></i>
        <ul>
            <li class="{{(url()->current() == route('home')) ? 'active' : ''}}">
               <a href="#">Home</a>
           </li>
            <li class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}">
                <a href="{{route('prodotti')}}">Prodotti</a>
            </li>
            <li class="{{(url()->current() == route('contatti')) ? 'active' : ''}}">
                <a href="{{route('contatti')}}">Contatti</a>
            </li>
        </ul>
    </nav>
</header>
