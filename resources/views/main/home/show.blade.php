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

    <div class="path">
        <span class="title_category"> ⌂ ❯ Категория товара ❯ {{$category->title}}</span>
    </div>

    <a href="" class="title_post"><b>{{ $product->title }}</b></a>

    <div class="post_one">

        <img class="main_img_post" src="{{ Storage::url($product->image)}}" alt="">
        <div class="content">
            <span class="title_category">Бренд : {{$category->title}}</span>
            <div class="buy">
                <span class="price">Цена: {{$product->price}}</span>
                <br>
                <button><img src="{{ asset('img/shopping-cart.png') }}" alt=""> Купить</button>
                <br>
                <span class="buy_span">Цены на сайте могут отличаться от цен в магазинах.</span>
                <br>
            </div>
            <div class="delivery">
                <ul>
                    <li>
                        <img src="{{asset('img/nv.png')}}" alt="">
                        Бесплатный самовывоз
                        <button>
                            Выбрать магазин
                        </button>
                    </li>
                    <li>
                        <img src="{{asset('img/nv.png')}}" alt="">
                        Нова Пошта <span>Бесплатно</span>

                    </li>
                    <li>
                        <img src="{{asset('img/nv.png')}}" alt="">
                        Почтомат Нова Пошта <span>Бесплатно</span>
                    </li>
                    <li>
                        <img src="{{asset('img/nv.png')}}" alt="">
                        Курьером <span>Бесплатно</span>
                    </li>
                    <li>
                        <img src="{{asset('img/nv.png')}}" alt="">
                        Отделение Укрпошта <span>Бесплатно</span>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <div class="post_one_content">

        <span class="characteristics">
             <span>
            <p>
         Основные характеристики
            </p>
                 <span>Дата добавления : {{$data->translatedFormat('F')}} • {{$data->day}} • {{$data->year}} • {{$data->format('H')}}</span>
            <br>
        </span>
        </span>

        <span class="description">
        <span>
            <p>
            Описание товара
            </p>
            <br>
        </span>
            {{$product->description}}
        </span>
    </div>
</div>

{{--@include('main.home.comment')--}}

<div class="container">
    <h2><img src="{{asset('img/12.png')}}" alt="" class="catalog_img"> Похожие товары</h2>
    <div class="posts_recommendations">
        @foreach ($relatedProducts as $relatedProduct)
            <div class="post_recommendations">
                <img src="{{ Storage::url($relatedProduct->image)}}" alt="">
                <a href="{{ route('main.home.show',$relatedProduct->id) }}">
                    <b>{{ $relatedProduct->title }}</b>
                </a>
                <br>
                <span class="category_title_span">{{$category->title}}</span>
                <br>
                <span>{{$relatedProduct->description}}</span>
                <br>
                <span class="price_product_span">Цена : {{$relatedProduct->price}}</span>
                <br>
                <button>Купить</button>
            </div>
        @endforeach
    </div>


    <h2><img src="{{asset('img/12.png')}}" alt="" class="catalog_img"> Случайные товары </h2>

    <div class="posts_recommendations">
        @foreach ($products as $product)
            <div class="post_recommendations">
                <img src="{{ Storage::url($product->image)}}" alt="">
                <a href="{{ route('main.home.show',$product->id) }}">
                    <b>{{ $product->title }}</b>
                </a>
                <br>
                <span class="category_title_span">{{$category->title}}</span>
                <br>
                <span>{{$product->description}}</span>
                <br>
                <span class="price_product_span">Цена : {{$product->price}}</span>
                <br>
                <button>Купить</button>
            </div>
        @endforeach

    </div>
</div>

@include('main.home.footer')
