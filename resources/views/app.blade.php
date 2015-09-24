<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100">--}}
    <link rel="stylesheet" href="/css/all.css">
</head>
<body>

    @include('partials/nav')

    <div class="container">

        @include('flash::message')

        @yield('content')
    </div>

    <script src="/js/all.js"></script>
    @yield('footer')
</body>
</html>