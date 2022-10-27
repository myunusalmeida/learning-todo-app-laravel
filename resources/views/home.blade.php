@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-dark">Welcome back <strong>{{ Auth::user()->name }}</strong></h2>
            <p class="text-secondary">You've got 7 tasks coming up in the next days.</p>

            <a href="{{ route('todo.create') }}" class="btn btn-primary mt-5 mb-3">Add New</a>

            @foreach ($todos as $todo)
                <div class="card mb-3">
                    <div class="card-body position-relative">
                        <div class="row">
                            <div class="col-1">
                                <form action="{{ route('todo.update', $todo->id) }}" method="post" id="formCheck{{ $todo->id }}">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="{{ $todo->status == 'done' ? 'none' : 'done' }}">
                                    <input type="checkbox" class="form-check-input"
                                     {{ $todo->status == 'done' ? 'checked' : '' }}
                                     onchange="document.getElementById('formCheck{{ $todo->id }}').submit()">
                                </form>
                            </div>
                            <div class="col-10">
                                <h5 class="card-title">{{ $todo->title }}</h5>
                                <p class="text-secondary">
                                    {{ $todo->description }}
                                </p>
                                <div class="d-flex align-items-center gap-1">
                                    <a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-warning btn-sm text-white">Edit</a>
                                    <form action="{{ route('todo.destroy', $todo->id) }}" class="d-inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
