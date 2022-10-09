<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.dashboard.style')
</head>

<body>
    <div id="app">
        @include('includes.dashboard.sidebar')
        <div id="main">

            @yield('content')

            @include('includes.dashboard.footer')
        </div>
    </div>


    @include('includes.dashboard.script')
</body>

</html>
