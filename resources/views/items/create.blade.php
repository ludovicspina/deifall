@extends('base')
@section('content')
    <div class="container">
        <h1>Create New Item</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('items.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <div class="form-group">
                <label for="STR">Strength (STR)</label>
                <input type="number" name="STR" class="form-control" value="{{ old('STR') }}" required>
            </div>

            <div class="form-group">
                <label for="DEX">Dexterity (DEX)</label>
                <input type="number" name="DEX" class="form-control" value="{{ old('DEX') }}" required>
            </div>

            <div class="form-group">
                <label for="CON">Constitution (CON)</label>
                <input type="number" name="CON" class="form-control" value="{{ old('CON') }}" required>
            </div>

            <div class="form-group">
                <label for="INT">Intelligence (INT)</label>
                <input type="number" name="INT" class="form-control" value="{{ old('INT') }}" required>
            </div>

            <div class="form-group">
                <label for="SAG">Wisdom (SAG)</label>
                <input type="number" name="SAG" class="form-control" value="{{ old('SAG') }}" required>
            </div>

            <div class="form-group">
                <label for="CHA">Charisma (CHA)</label>
                <input type="number" name="CHA" class="form-control" value="{{ old('CHA') }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Item</button>
        </form>
    </div>
@stop
