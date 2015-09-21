<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
</head>
<body>
    <div class="container">

        {{--@include('partials/flash')--}}
        @include('flash::message')

        @yield('content')
    </div>

    <div class="footer">
        <script src="http://code.jquery.com/jquery-2.1.4.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script>
            $('#flash-overlay-modal').modal();
//            $('.alert').not('.alert-important').delay(3000).slideUp(300)
        </script>
    </div>
    @yield('footer')
</body>
</html>