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
<div>
  <span class="fst-italic fs-6 float-start">
    If you didn't find your city. You can add its
  </span>
  <a href="{{ route('weather.create') }}" class="btn btn-outline-primary bnt-lg float-end">Add</a>
</div>
@endsection