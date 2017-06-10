<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('admin.adminCSS')
</head>
<body>
<aside>
    @include('admin.adminSideBar')
</aside>
<main>
    @yield('content')
</main>
<footer>

</footer>
</body>
@include('admin.adminJS')
@yield('scripts')
</html>