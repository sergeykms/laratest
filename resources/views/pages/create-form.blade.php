@extends('layouts.app')

@section('main')
    <div class="container">
        <div class="card col-md-5 m-3">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Имя участника: <span
                            class="badge text-bg-primary">{{ $user['name'] }}</span></li>
                <li class="list-group-item">Возраст: <span class="badge text-bg-primary">{{ $user['age'] }}</span></li>
                <li class="list-group-item">Страна проживания: <span
                            class="badge text-bg-primary">{{ $user['region'] }}</span></li>
                <li class="list-group-item">Любимое хобби: <span
                            class="badge text-bg-primary">{{ $user['hobby'] }}</span></li>
                <li class="list-group-item">О себе <span class="badge text-bg-primary">{{ $user['about'] }}</span></li>
            </ul>
        </div>
    </div>




    {{--    <div class="mb-3">--}}
    {{--        <h2>Имя: {{ $user['name'] }}</h2>--}}
    {{--        <h2>Возраст: {{ $user['age'] }}</h2>--}}
    {{--        <h2>Страна проживания: {{ $user['region'] }}</h2>--}}
    {{--        <h2>Любимое хобби: {{ $user['hobby'] }}</h2>--}}
    {{--        <h2>О себе: {{ $user['about'] }}</h2>--}}
    {{--    </div>--}}
@endsection