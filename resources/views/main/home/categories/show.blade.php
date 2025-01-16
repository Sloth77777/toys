<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="{{ asset('style/categories.css') }}">
    <link rel="stylesheet" href="{{ asset('style/header.css') }}">
    <link rel="stylesheet" href="{{ asset('style/css.css') }}">
    <link rel="stylesheet" href="{{ asset('style/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('style/post.css') }}">
</head>
<body>
<script src="{{ asset('js/main.js') }}"></script>

@include('main.home.header')

<div class="container_categories">

    <div class="sidebar">

        <ul class="list-unstyled">
            <li>
                <h3>Все Категории</h3>
            </li>
            @foreach($categories as $category)
                <li class="catalog">
                    <a class="navBase" href="{{ route('main.home.categories.show', ['category' => $category->id]) }}">
                        <span class="list-categories">{{ $category->title }}</span>
                    </a>
                </li>
            @endforeach
        </ul>

        <form method="GET" action="">
            <div class="">
                <label for="sort_by_price" class="form-label">Сортировать по цене:</label>
                <select name="sort_by_price" id="sort_by_price" class="form-select">
                    <option value="" {{ empty($sortByPrice) ? 'selected' : '' }}>По умолчанию</option>
                    <option value="asc" {{ $sortByPrice == 'asc' ? 'selected' : '' }}>По возрастанию</option>
                    <option value="desc" {{ $sortByPrice == 'desc' ? 'selected' : '' }}>По убыванию</option>
                </select>

            </div>
            <div class="col-md-12">
                <button type="submit" class="buy_button">Применить фильтры</button>
            </div>
        </form>
    </div>


    <div class="main-content">
        <h1>Товары категории: {{ $categoryDetails->title }}</h1>
        <h4>Подкатегории</h4>
        <div class="path">
            @if ($subcategories->isNotEmpty())
                @foreach ($subcategories as $index => $subcategory)
                    <span class="title_category">
                        <a class="navBase sub_category"
                           href="{{ route('main.home.categories.show', ['category' => $category->id, 'subCategory' => $subcategory->id]) }}">{{ $subcategory->title }}</a>
                        @if (!$loop->last)
                            |
                        @endif
                    </span>
                @endforeach
            @else
                <span>Подкатегории не найдены</span>
            @endif
        </div>

        <div class="under_cap">
            <div class="row">
                @foreach ($products as $product)
                    <div class="product">
                        <div class="product_image">
                            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->title }}">
                        </div>
                        <div class="product_info">
                            <a href="{{ route('main.home.show', $product->id) }}" class="product_title">
                                <b>{{ $product->title }}</b>
                            </a>
                            <br>
                            <span class="category_title_span">Категория : {{$categoryDetails->title}}</span>
                            <p class="product_description">{{ $product->description }}</p>
                            <p class="price_product_span">Цена: <span class="price">{{ $product->price }} грн.</span>
                            </p>
                            <button class="buy_button">Купить</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>
</div>

@include('main.home.footer')
</body>
</html>
