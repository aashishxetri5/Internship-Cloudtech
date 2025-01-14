<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
</head>
<body>
    <a href="/">Home</a>
    <h1>Multiplication Table for {{ $number }}</h1>
    <table border="1">
        <tr>
            <th>Multiplier</th>
            <th>Result</th>
        </tr>
        @for($i = 1; $i <= 10; $i++)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $i * $number }}</td>
            </tr>
        @endfor
    </table>
</body>
</html>