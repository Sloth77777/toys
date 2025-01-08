@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-3 bg-white rounded shadow mb-3 ">
        @csrf
        <div class="mb-3">
            <h3>Add Role</h3>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                   placeholder="Title" value="{{ old('title') }}">
            @if ($errors->has('title'))
                <div class="error">{{ $errors->first('title') }}</div>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label">Permissions:</label>
            @foreach($permissions as $permission)
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" name="permissions[]" value="{{ $permission->id }}"
                           @if(in_array($permission->id, old('permissions', []))) checked @endif>
                    <label for="{{$permission->id}}" class="form-check-label">{{ $permission->name }}</label>
                </div>
            @endforeach
        </div>

        <button type="submit" class="btn btn-outline-primary d-flex ">
            Add Role
        </button>
    </form>
@endsection
