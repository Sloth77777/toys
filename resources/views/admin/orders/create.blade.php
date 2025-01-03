@extends('admin.layouts.app')

@section('content')

    <body
        class="p-5">
    <div>
        <form action="{{ route("admin.orders.store") }}"
              method="post" enctype="multipart/form-data"
              class="max-w-md mx-auto p-6 bg-white rounded shadow">
            @csrf
            <h2 class="text-xl font-semibold mt-8">Создать новый ордер</h2>
            <div class="mb-4">
                <label for="product_id" class="block font-medium">ID продукта:</label>
                <input type="text" name="product_id" id="product_id" required
                       class="border border-gray-300 rounded p-2 w-full">
            </div>
            <div class="mb-4">
                <label for="name" class="block font-medium">Имя:</label>
                <input type="text" name="name" id="name" required
                       class="border border-gray-300 rounded p-2 w-full">
            </div>
            <div class="mb-4">
                <label for="surname" class="block font-medium">Фамилия:</label>
                <input type="text" id="surname" name="surname" required
                       class="border border-gray-300 rounded p-2 w-full">
            </div>
            <div class="mb-4">
                <label for="phone_number" class="block font-medium">Телефон:</label>
                <input type="number" id="phone_number" name="phone_number" required
                       class="border border-gray-300 rounded p-2 w-full">
            </div>
            <div class="mb-4">
                <label for="email" class="block font-medium">Email:</label>
                <input type="email" id="email" required name="email"
                       class="border border-gray-300 rounded p-2 w-full">
            </div>
            <button type="submit"
                    class="bg-blue-500 text-black font-semibold rounded-lg shadow-md hover:bg-blue-600 hover:shadow-lg transition duration-300 ease-in-out p-4 w-full">
                Создать ордер
            </button>
        </form>
    </div>
    </body>

@endsection
