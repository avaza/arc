<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ARC System</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
</head>
<body>

    @include('layouts.partials.nav')

    <div class="container">
        @include('flash::message')

        @yield('content')
    </div>


    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="/javascripts/bootstrap-datepicker.min.js"></script>

</body>
</html>