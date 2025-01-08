@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.roles.update', $role->id) }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-4 bg-white rounded shadow mb-4">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="title_{{ $role->id }}" class="block text-gray-700 font-bold mb-2">Title:</label>
            <input type="text" id="title_{{ $role->id }}" name="title" value="{{ old('title', $role->title) }}" required
                   class="w-full p-3 border border-gray-300 rounded">
            @if ($errors->has('title'))
                <div class="error text-red-500">{{ $errors->first('title') }}</div>
            @endif
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">Permissions:</label>
            @foreach($permissions as $permission)
                <div class="form-group form-check mb-3">
                    <input type="checkbox" id="checkbox_{{ $permission->id }}" name="permissions[]"
                           class="form-check-input"
                           value="{{ $permission->id }}"
                           @if(in_array($permission->id, old('permissions', $role->permissions->pluck('id')->toArray())))
                               checked
                        @endif>
                    <label for="checkbox_{{ $permission->id }}" class="form-check-label">{{ $permission->name }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit"
                class="w-full bg-blue-500 text-black font-bold py-2 rounded hover:bg-blue-700 transition duration-200">
            Update Role
        </button>
    </form>
@endsection
