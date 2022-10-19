@extends('layouts.weather')

@section('content')
<div>
    <br>
    <h1>Weather in {{ $city }} Now:</h1><br>
    <h3>Weather: {{ $weather }}</h3>
    <h3>Temperature: {{ $temperature }} °C</h3>
    <h3>Wind Speed: {{ $windSpeed }} m/s</h3><br>
    <a href="{{ route('weather.index') }}" class="btn btn-outline-primary btn-lg">Back</a>
</div>
@endsection()