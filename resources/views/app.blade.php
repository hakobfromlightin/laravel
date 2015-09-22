<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    {{--<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100">--}}
    <link rel="stylesheet" href="/css/all.css">
</head>
<body>
    <div class="container">

        {{--@include('partials/flash')--}}
        @include('flash::message')

        @yield('content')
    </div>

    <script src="/js/all.js"></script>
    @yield('footer')
</body>
</html>