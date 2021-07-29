<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    @yield('page')
</head>
<body>
    <div class=" container my-2">
        @yield('main')

    </div>

    @yield('page-script')
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>

</body>
</html>

