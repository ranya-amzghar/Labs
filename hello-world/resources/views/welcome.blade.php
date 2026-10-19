<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Word</h1>
    @php
        $a = 10;
        $b = 20;
        $c = $a + $b;
    @endphp
    <p> {{ $a }} + {{ $b }} = {{ $c }}</p>
</body>
</html>