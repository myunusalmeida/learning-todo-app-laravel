@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex align-items-center justify-content-between mb-5">
                <h2 class="text-dark">Create New Todo</h2>
                <a href="{{ url('/') }}" class="btn btn-secondary">cancel</a>
            </div>

            <form action="{{ route('todo.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Title Todo">
                </div>
                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" cols="30" rows="10" placeholder="Description"></textarea>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
