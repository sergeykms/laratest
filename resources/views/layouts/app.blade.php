<!doctype html>
<html lang="ru">
@include('components.head')
<body>
@include('components.header')
<main>
    <div class="container m-lg-3">
        Some content
    </div>
</main>
@include('components.script')
<div class="container">
    @yield('main')
</div>
</body>
</html>