<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>Document</title>
</head>
<body>
<div class="container">
    <br>
    <h1>Weather in {{ $city }} Now:</h1><br>
    <h3>Weather: {{ $weather }}</h3>
    <h3>Temperature: {{ $temperature }} °C</h3>
    <h3>Wind Speed: {{ $windSpeed }} m/s</h3><br>
    <a href="{{ route('weather.index') }}" class="btn btn-outline-primary btn-lg">Back</a>
</div>    
</body>
</html>