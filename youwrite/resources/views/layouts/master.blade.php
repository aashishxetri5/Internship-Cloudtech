<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouWrite</title>
    <link rel="stylesheet" href="css/style.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="header ">
        @include('pages.header')
    </div>

    <div class="content">
        @yield('content')
    </div>

    <div class="footer">
        @include('pages.footer', ["author" => "Some guy"])
    </div>

</body>

</html>