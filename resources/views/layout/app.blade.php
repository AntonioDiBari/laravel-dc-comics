<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <link rel="icon" href="{{ Vite::asset('/resources/images/favicon.ico') }}">
    <title>DC | @yield('page-title') </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
</head>

<body>
    @include('partials.header')
    <div class="container alert-container">
        @if (session('message'))
            <div class="alert {{ session('type') }} alert-dismissible my-5">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
    @yield('main-content')
    @include('partials.footer')
    @yield('modal')
</body>

</html>
