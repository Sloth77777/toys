@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-6 bg-white rounded shadow mb-6">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title_{{ $role->id }}" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" id="title_{{ $role->id }}" name="title" value="{{ $role->name }}" required
                   class="w-full p-3 border border-gray-300 rounded">
            @if ($errors->has('name'))
                <div class="error text-red-500">{{ $errors->first('name') }}</div>
            @endif
        </div>

        <div class="form-group form-check mb-4">
            <input type="checkbox" id="checkbox_{{ $role->id }}" name="checkbox_{{ $role->id }}"
                   class="form-check-input" value="{{ $role->id }}">
            <label for="checkbox_{{ $role->id }}" class="form-check-label">{{ $role->name }}</label>
        </div>

        <button type="submit"
                class="w-full bg-blue-500 text-black font-bold py-2 rounded hover:bg-blue-700 transition duration-200">
            Delete Role
        </button>
    </form>
@endsection
