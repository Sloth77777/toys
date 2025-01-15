@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-6 bg-white rounded shadow">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" id="title" name="title" value="{{ $category->title }}" required
                   class="w-full p-3 border border-gray-300 rounded">
            @if ($errors->has('title'))
                <div class="error">{{ $errors->first('title') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <div class="form-group">
                <label for="parent_id">Родительская категория</label>
                <select name="parent_id" id="parent_id" class="form-control">
                    <option value="">Без родителя (основная категория)</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <button type="submit"
                class="w-full bg-blue-500 text-black font-bold py-2 rounded hover:bg-blue-700 transition duration-200">
            Update Category
        </button>
    </form>
@endsection
