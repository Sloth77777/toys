@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-10 bg-white rounded shadow mb-3 ">
        @csrf
        <div class="mb-3">
            <h3>Add Category</h3>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                   placeholder="Title">
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
                class="btn btn-outline-primary d-flex ">
            Add Category
        </button>
    </form>
@endsection
