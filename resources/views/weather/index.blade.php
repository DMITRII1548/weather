@extends('layouts.weather')

@section('content')
<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
          <th scope="col">City</th>
            </tr>
            </thead>
    @foreach ($cities as $city)
      <tbody>
        <tr>
          <th scope="row">{{ ++$number }}</th>
          <td><a href="{{ route('weather.show', $city->id) }}">{{ $city->city }}</a></td>
        </tr>
      </tbody>
    @endforeach
  </table>
</div>
@endsection