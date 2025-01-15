<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="{{ asset('style/header.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css.css') }}">
    <link rel="stylesheet" href="{{ asset('style/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('style/post.css') }}">
</head>
<body>
<script src="{{ asset('js/main.js') }}"></script>
@include('main.home.header')
<div class="container">
    <div class="under_cap">
        <div class="row">
            <ul class="navBaseWr">
                @foreach($categories as $category)
                    <li class="catalog">
                        <a class="navBase"
                           href="{{ route('main.home.categories.show', ['category' => $category->id]) }}">
                            <span>{{ $category->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="img-tir">
            <img src="{{ asset("img/1.jpg") }}" alt="">
            <img src="{{ asset("img/1.jpg") }}" alt="">
        </div>
        <div class="money_form">
            <form action="" method="POST">
                @csrf
                <h3>
                    Підбір подарунку
                </h3>
                <p>
                    Вкажіть ціну (грн)
                </p>
                <input type="int">
                <input type="int">
                <label for="customRange1" class="form-label">Example range</label>
                <input type="range" class="form-range" id="customRange1">
                <p>
                    Виберіть вік дитини
                </p>

                <select id="disabledSelect" class="form-select">
                    <option value="" disabled selected>Выберите возраст</option>
                    <option value="1-3">1-3 года</option>
                    <option value="4-6">4-6 лет</option>
                    <option value="7-10">7-10 лет</option>
                </select>

                <p>
                    Виберіть категорію
                </p>
                <select id="disabledSelect" class="form-select">
                    <option>Категория</option>
                    @foreach($categories as $category)
                        <option value="">
                            <li class="catalog">
                                <a class="navBase" href="">
                                    <img src="{{asset('img/12.png')}}" alt="" class="catalog_img">
                                    <span>{{ $category->title }}</span>
                                </a>
                            </li>
                        </option>
                    @endforeach
                </select>
                <button><b>Принять</b></button>
            </form>
        </div>
    </div>
</div>
<div class="container">
    <main>
        <div class="">
            @foreach ($product_pag as $product)

                <div class="post_recommendations post">
                    <div class="product_image">
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}">
                    </div>
                    <div class="product_info">
                        <a href="{{ route('main.home.show', $product->id) }}" class="product_title">
                            <b>{{ $product->title }}</b>
                        </a>
                        <br>
                        <span class="category_title_span">Категория : {{$category->title}}</span>
                        <br>
                        <p class="product_description">{{ $product->description }}</p>
                        <p class="price_product_span">Цена: <span class="price">{{ $product->price }} руб.</span></p>
                        <button class="buy_button">Купить</button>
                    </div>
                </div>
            @endforeach
        </div>
        <h2><img src="{{asset('img/12.png')}}" alt="" class="catalog_img"> Случайные товары</h2>

        <div class="posts_recommendations">
            @foreach ($product_pag as $product)

                <div class="post_recommendations ">
                    <div class="product_image">
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}">
                    </div>
                    <div class="product_info">
                        <a href="{{ route('main.home.show', $product->id) }}" class="product_title">
                            <b>{{ $product->title }}</b>
                        </a>
                        <br>
                        <span class="category_title_span">Категория : {{$category->title}}</span>
                        <br>
                        <p class="product_description">{{ $product->description }}</p>
                        <p class="price_product_span">Цена: <span class="price">{{ $product->price }} руб.</span></p>
                        <button class="buy_button">Купить</button>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="carousel" id="carousel1">
            <h2><img src="{{asset('img/12.png')}}" alt="" class="catalog_img"> Сезонные товары</h2>
            <div class="carousel-container">

                @foreach ($product_pag as $product)
                    <div class="post">
                        <div class="product_image">
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}">
                        </div>
                        <div class="product_info">
                            <a href="{{ route('main.home.show', $product->id) }}" class="product_title">
                                <b>{{ $product->title }}</b>
                            </a>
                            <br>
                            <span class="category_title_span">Категория : {{$category->title}}</span>
                            <br>
                            <p class="product_description">{{ $product->description }}</p>
                            <p class="price_product_span">Цена: <span
                                    class="price">{{ $product->price }} руб.</span></p>
                            <button class="buy_button">Купить</button>
                        </div>
                    </div>
                @endforeach


            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>


        <div class="text-container">
            <div class="text">
                <p>Детские игрушки - Будинок іграшок.</p>
                <br>
                <p>Купить онлайн детские игрушки в Украине с доставкой.</p>
                <br>
                <p>
                    Хотите подобрать качественные, интересные и безопасные детские игрушки? Проще всего заказать их в
                    крупном
                    онлайн-магазине! Здесь представлены действительно красивые и современные товары от всемирно
                    известных
                    производителей. Интернет-магазин детских игрушек в Киеве «Будинок Іграшок» предлагает огромный
                    ассортимент
                    продукции для детей любого возраста. В нашем каталоге собраны товары оригинальных брендов, например,
                    LEGO,
                    Barbie, DC, LOL Surprise, Baby Born и т.д.
                </p>
                <br>
                <p>
                    Эти детские игрушки не только красивы, но и полезны для развития малыша. Изготовлены из безопасных
                    материалов,
                    что подтверждено соответствующими сертификатами. Вы можете заказать игрушки для детей с доставкой по
                    Киеву и
                    всей Украине или посетить один из наших фирменных магазинов!
                </p>
                <br>
                <p>
                    Главные преимущества интернет-магазина игрушек
                </p>
                <br>
                <p>
                    Будинок Іграшок Компания работает на украинском рынке больше 25 лет. За это время мы стали торговой
                    сетью
                    национального масштаба, которая предлагает гарантированно качественные и оригинальные детские
                    игрушки.
                    Почему же
                    взрослые и дети выбирают именно «Будинок Іграшок»?
                </p>
                <br>
                <nav>
                    <ul>
                        <li>Комфорт. Каждый наш магазин — настоящая территория детства, где царит веселая праздничная
                            атмосфера, а
                            консультанты
                            готовы помочь с выбором подарка для любого случая. Сегодня для посещения доступно свыше 50
                            точек
                            продаж!
                        </li>
                        <li>Большой ассортимент. Хотите порадовать малыша или выбрать забавный подарок для взрослого? В
                            онлайн-магазине представлено более 50 000 игрушек, поэтому вы точно найдете то, что ищете!
                        </li>
                        <li>Подтвержденное качество. На каждый товар действует гарантия производителя. Также вы можете
                            ознакомиться
                            с сертификатами на интересующую продукцию. Многочисленные дипломы, благодарности и грамоты —
                            подтверждение нашего серьезного отношения к работе.
                        </li>
                        <li>Специальные предложения. В наших магазинах и на сайте всегда есть детские игрушки с
                            приятными
                            скидками
                            до 50% от стоимости. Также для клиентов действует накопительная система бонусов, позволяющая
                            экономить
                            на дальнейших покупках. Но больше всего специальных предложений, акций и розыгрышей ждет вас
                            в
                            преддверии праздников!
                        </li>
                        <li>Быстрый заказ. Чтобы делать покупки в пару кликов, составлять списки детских желаний и
                            делиться
                            ими,
                            пользоваться всеми преимуществами онлайн-шопинга, достаточно скачать на смартфон наше
                            фирменное
                            приложение. Кроме того, через программу можно пользоваться виртуальной картой постоянного
                            клиента, что
                            удобно при посещении офлайн-магазинов.
                        </li>
                        <li>Доставка по Украине. Для удобства клиентов «Будинок Іграшок» осуществляет отправку заказов
                            по
                            всей
                            территории страны. Чтобы получить детские игрушки с доставкой, достаточно оформить заказ на
                            сайте и
                            выбрать наиболее удобный способ получения. Также вы можете воспользоваться услугой
                            самовывоза из
                            нашего
                            ближайшего магазина.
                        </li>
                    </ul>
                </nav>
            </div>
            <span class="read-more">Читати далі</span>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", () => {
                const containers = document.querySelectorAll('.text-container');

                containers.forEach(container => {
                    const readMore = container.querySelector('.read-more');
                    readMore.addEventListener('click', () => {
                        container.classList.toggle('expanded');
                        readMore.textContent = container.classList.contains('expanded')
                            ? 'Згорнути'
                            : 'Читати далі';
                    });
                });
            });
        </script>
    </main>
</div>

@include('main.home.footer')
</body>
</html>


