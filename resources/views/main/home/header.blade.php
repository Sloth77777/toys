<div class="img_discount">
    <img src="{{ asset('img/60.jpg') }}" alt="">
</div>

<div class="above_menu">
    <ul>
        <li><a href="">Більше</a></li>
        <li><a href="">Магазины</a></li>
        <li><a href="">Оплата і доставка</a></li>
        <li><a href="">Контакты</a></li>
        <li><a href="">RU</a></li>
    </ul>
</div>

<div class="logo_search">
    <a href="{{route('main.home.index')}}"> <img src="{{ asset('img/Logo.svg') }}" alt=""></a>
    <form action="{{ route('main.home.search') }}" method="get">
        <input class="form-control"  type="text" name="search" value="{{ request('search') }}" placeholder="Поиск...">
        <button class="btn-search" type="submit">Поиск</button>
    </form>

    <div class="phone">
        <img src="{{ asset('img/phone-call.png') }}" alt="">
        0 (800) - 30 - 11 - 30
    </div>
    <div class="menu_icon">
        <ul>
            <li>
                    <img src="{{ asset('img/heart.png') }}" alt="">
                    <span><b><a href="#" class="header-cart">Желания</a></b></span>
            </li>
            <li>
                    <img src="{{ asset('img/shopping-cart.png') }}" alt="">
                    <span><b><a href="#" class="header-cart">Корзина</a></b></span>
            </li>

            @guest
                <li>
                    <a href="{{ route('login') }}">
                        <img src="{{ asset('img/user.png') }}" alt="">
                        <span class="header-cart"><b>Вход</b></span>
                    </a>
                    <a href="{{ route('register') }}">
                        <span class="header-cart"><b>Регистрация</b></span>
                    </a>
                </li>
            @endguest

            @auth
                <li>
                    <a href="{{url('/dashboard')}}" >
                        <img src="{{ asset('img/user.png') }}" alt="">
                        <span class="header-cart"><b>Профиль</b></span>
                    </a>
                </li>
            @endauth

        </ul>
    </div>
</div>

<header class="desktop-header">
    <ul>
        <li class="menu">
            <img src="{{ asset('img/apps.png') }}" alt="Каталог">
            <b>Каталог</b>
            <img src="{{ asset('img/angle-small-down.png') }}" alt="Dropdown">
        </li>
        <li><a href="">Герои</a></li>
        <li><a href="">Бренды</a></li>
        <li><a href="">Акции</a></li>
        <li><a href="">Выбор за возрастом</a></li>
        <li><a href="">Наилучшие предложения</a></li>
        <li><a href="">LEGO</a></li>
    </ul>
</header>

<header class="burger-menu">
    <img src="{{asset('img/menu-burger.png')}}" class="burger-img" alt="">

    <ul>
        <li class="bur-menu">
            <img src="{{ asset('img/apps.png') }}" alt="Каталог">
            <b>Каталог</b>
            <img src="{{ asset('img/angle-small-down.png') }}" alt="Dropdown">
        </li>
        <li><a href="">Герои</a></li>
        <li><a href="">Бренды</a></li>
        <li><a href="">Акции</a></li>
        <li><a href="">Выбор за возрастом</a></li>
        <li><a href="">Наилучшие предложения</a></li>
        <li><a href="">LEGO</a></li>
    </ul>
</header>
<script>
    // Находим бургер-меню и добавляем обработчик события на клик
    const burgerMenu = document.querySelector('.burger-menu');

    burgerMenu.addEventListener('click', function () {
        // Переключаем класс "open" для отображения/скрытия меню
        this.classList.toggle('open');
    });
</script>
