@extends('layouts.app')

@section('main')
    <form action="{{ route('createUser') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Возраст</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="mb-3">
            <label for="region" class="form-label">Страна проживания</label>
            <input type="text" class="form-control" id="region" name="region">
        </div>
        <div class="mb-3">
            <label for="hobby" class="form-label">Любимое хобби</label>
            <input type="text" class="form-control" id="hobby" name="hobby">
        </div>
        <div class="mb-3">
            <label for="about" class="form-label">О себе</label>
            <textarea class="form-control" id="about" name="about" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Все верно</button>
    </form>
@endsection