@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.products.update', $order->id) }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-6 bg-white rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="product_id" class="block text-gray-700 font-bold mb-2">ID продукта:</label>
            <input type="text" id="name" name="product_id" value="{{ $order->product_id }}" required
                   class="w-full p-3 border border-gray-300 rounded">
            @if ($errors->has('product_id'))
                <div class="error">{{ $errors->first('product_id') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Имя:</label>

            <input type="text" name="name" id="name" required
                   class="border border-gray-300 rounded p-2 w-full" value="{{ $order->name }}">
            @if ($errors->has('name'))
                <div class="error">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="surname" class="block text-gray-700 font-bold mb-2">Фамилия:</label>
            <input type="text" id="surname" name="surname" required
                   class="border border-gray-300 rounded p-2 w-full" value="{{ $order->surname }}">
            @if ($errors->has('surname'))
                <div class="error">{{ $errors->first('surname') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="phone_number" class="block text-gray-700 font-bold mb-2">Телефон:</label>
            <input type="number" id="phone_number" name="phone_number" required
                   class="border border-gray-300 rounded p-2 w-full" value="{{ $order->phone_number }}">
            @if ($errors->has('phone_number'))
                <div class="error">{{ $errors->first('phone_number') }}</div>
            @endif
        </div>
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-bold mb-2">Email:</label>
            <input type="email" id="email" required name="email"
            class="border border-gray-300 rounded p-2 w-full" value="{{ $order->email }}">
            @if ($errors->has('email'))
                <div class="error">{{ $errors->first('email') }}</div>
            @endif
        </div>


        <button type="submit"
                class="w-full bg-blue-500 text-black font-bold py-2 rounded hover:bg-blue-700 transition duration-200">
            Update Product
        </button>
    </form>
@endsection
