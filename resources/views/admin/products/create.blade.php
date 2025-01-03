@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-10 bg-white rounded shadow mb-3 ">
        @csrf
        <div class="mb-3">
            <h3>Add Product</h3>
        </div>
        <div class="mb-3" >
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                   placeholder="Title">
            @if ($errors->has('title'))
                <div class="error">{{ $errors->first('title') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="description" class="form-label">Description:</label>
            <textarea id="description" name="description" required
                      class="form-control"></textarea>
            @if ($errors->has('description'))
                <div class="error">{{ $errors->first('description') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="formFileDisabled" class="form-label">Image:</label>
            <input class="form-control" type="file" id="image" name="image" multiple>
            @if ($errors->has('image'))
                <div class="error">{{ $errors->first('image') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" id="price" name="price" required class="form-control">
    @if ($errors->has('price'))
                <div class="error">{{ $errors->first('price') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label for="discount" class="form-label">Discount:</label>
            <input type="number" id="discount" name="discount" required class="form-control">
        @if ($errors->has('discount'))
                <div class="error">{{ $errors->first('discount') }}</div>
            @endif
        </div>
        <div class="mb-4">
            <label for="discount" class="form-label">Category:</label>
            <select name="category_id" id="category_id" class="form-select form-select-lg mb-2">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit"
                class="btn btn-outline-primary d-flex ">
            Add Product
        </button>
    </form>
@endsection
