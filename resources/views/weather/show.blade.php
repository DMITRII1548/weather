<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <h1>Weather in Almaty Now:</h1>
    <h3>Weather: {{ $weather }}</h3>
    <h3>Temperature: {{ $temperature }} °C</h3>
    <h3>Wind Speed: {{ $windSpeed }} m/s</h3>
</body>
</html>