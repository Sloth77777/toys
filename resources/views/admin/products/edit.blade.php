@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-6 bg-white rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" id="title" name="title" value="{{ $product->title }}" required
                   class="w-full p-3 border border-gray-300 rounded">
            @if ($errors->has('title'))
                <div class="error">{{ $errors->first('title') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea id="description" name="description" required
                      class="w-full p-3 border border-gray-300 rounded resize-none">{{ $product->description }}</textarea>
            @if ($errors->has('description'))
                <div class="error">{{ $errors->first('description') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
            <input type="file" id="image" name="image" accept="image/*"
                   class="w-full p-3 border border-gray-300 rounded" placeholder="{{$product->image}}">
            @if ($product->image)
                <div class="mb-2">
                    <img src="{{ url('storage/',$product->image) }}" alt="Текущее изображение" class="w-full h-auto rounded">
                </div>
            @endif
        </div>

        <div class="mb-4">
            <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}" required
                   class="w-full p-3 border border-gray-300 rounded">
            @if ($errors->has('price'))
                <div class="error">{{ $errors->first('price') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="discount" class="block text-gray-700 font-bold mb-2">Discount:</label>
            <input type="number" id="discount" name="discount" value="{{ $product->discount }}" min="0" max="100"
                   class="w-full p-3 border border-gray-300 rounded">
            @if ($errors->has('discount'))
                <div class="error">{{ $errors->first('discount') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="category_id" class="block text-gray-700 font-bold mb-2">Category:</label>
            <select name="category_id" id="category_id" class="w-full p-3 border border-gray-300 rounded">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $product->category_id ? 'selected' : '' }}>
                        {{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit"
                class="w-full bg-blue-500 text-black font-bold py-2 rounded hover:bg-blue-700 transition duration-200">
            Update Product
        </button>
    </form>
@endsection
