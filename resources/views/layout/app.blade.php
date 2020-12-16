
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title'){{ ' | '.setting('site.title') }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/favicon.png') }}">

    <link rel="shortcut icon" href="{{ asset('images/tlogo.png') }}">
    @include('includes.css')
    @yield('css')
</head>

<body>

    @include('includes.header')


        @yield('body')


    @include('includes.footer')
    


    @include('includes.js')
    @yield('js')
</body>

</html>