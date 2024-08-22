@extends('base')
@section('content')
<div class="container">
    <h1>Create New Adventure</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('adventures.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Adventure</button>
    </form>
</div>
@stop
