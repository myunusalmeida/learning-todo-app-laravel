@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h2 class="text-dark">Edit Todo</h2>
                <a href="{{ url('/') }}" class="btn btn-secondary">cancel</a>
            </div>

            <form action="{{ route('todo.update', $todo->id) }}" method="post">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title Todo" value="{{ $todo->title }}">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Description">{{ $todo->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="none" {{ $todo->status == 'none' ? 'selected' : '' }}>None</option>
                        <option value="done" {{ $todo->status == 'done' ? 'selected' : '' }}>Done</option>
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
