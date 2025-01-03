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
    <form class="form" role="search">
        <input class="form-control" type="search" placeholder="Что-то ищите?" aria-label="Search">
        <button class="btn" type="submit"><b>Поиск</b></button>
    </form>

    <div class="phone">
        <img src="{{ asset('img/phone-call.png') }}" alt="">
        0 (800) - 30 - 11 - 30
    </div>
    <div class="menu_icon">
        <ul>
            <li>
                <a href="">
                    <img src="{{ asset('img/heart.png') }}" alt="">
                    <span><b><a href="#">Желания</a></b></span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('img/shopping-cart.png') }}" alt="">
                    <span><b><a href="#">Корзина</a></b></span>
                </a>
            </li>
            <li>
                <a href="">
                    <img src="{{ asset('img/user.png') }}" alt="">
                    <span><b><a href="#" style="text-decoration: none">Вход</a></b></span>
                </a>
            </li>
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
