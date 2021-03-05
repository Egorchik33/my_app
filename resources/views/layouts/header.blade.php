<header class="header">
    <div class="container">
        <div class="header__row">
            <div class="header__logo">
                <img src="https://static.f95zone.to/assets/logo.png" alt="">
            </div>
            <div class="header__search">
                <span class="header__search-icon"></span>
                <input class="input" type="text" placeholder="Search">
            </div>
        </div>
    </div>
</header>
<nav class="nav">
    <div class="container">
        <div class="nav__row">
                <ul class="nav__list">
                    <li class="nav__link"><a href="{{route('welcome')}}" >Покупка</a></li>
                    <li class="nav__link"><a href="{{route('about')}}" >О нас</a></li>
                    <li class="nav__link"><a href="{{route('help')}}" >Помощь</a></li>
                </ul>
                <ul class="nav__list">
                    @guest
                    <li class="nav__login"><a href="{{route('login')}}" >Логин</a></li>
                        @if (Route::has('register'))
                    <li class="nav__register"><a href="{{route('register')}}" >Регистрация</a></li>
                        @endif
                    @else
                    <li class="nav__profile"><a href="{{route('account')}}">{{ Auth::user()->name }}</a></li>
                        <li class="nav__logout">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Выйти
                            </a>
                        </li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                           @csrf
                        </form>
                    @endguest
                </ul>
        </div>
    </div>
</nav>
<section class="section">
    <div class="container">
        <div class="section__row">
            <ul class="section__list">
                <li class="section__link">
                    <a href="">Новости дня</a>
                </li>
                <li class="section__link">
                    <a href="">Горшок жив</a>
                </li>
                <li class="section__link">
                    <a href="">Первоапрельская шутка</a>
                </li>
                <li class="section__link">
                    <a href="">Да</a>
                </li>
                <li class="section__link">
                    <a href="">Нет</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<script src="js/active.js"></script>
