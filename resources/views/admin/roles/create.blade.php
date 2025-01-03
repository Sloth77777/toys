@extends('admin.layouts.app')

@section('content')
    <form action="{{ route('admin.roles.store') }}" method="POST" enctype="multipart/form-data"
          class="max-w-md mx-auto p-10 bg-white rounded shadow mb-3 ">
        @csrf
        <div class="mb-3">
            <h3>Add Role</h3>
        </div>
        <div class="mb-3" >
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp"
                   placeholder="Title">
            @if ($errors->has('title'))
                <div class="error">{{ $errors->first('Name') }}</div>
            @endif
        </div>

            @foreach($roles as $role)
                <div class="from-group form-check">
                    <input type="checkbox" class="form-check-input" value="{{$role->id}}">
                    <label for="" class="form-check-label" for="{{$role->id}}">{{$role->name}}</label>
                </div>
            @endforeach
        <button type="submit"
                class="btn btn-outline-primary d-flex ">
            Add Role
        </button>
    </form>
@endsection
