<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body>


    @include('pages.header')

    <h1>Body</h1>

    @includeWhen(1 < 2, 'pages.footer', ["author" => "Aashish Katwal"])
</body>

</html>