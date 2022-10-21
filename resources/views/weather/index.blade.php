@extends('layouts.weather')

@section('content')
<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">City</th>
        <th scope="col"></th>
      </tr>
    </thead>
    @foreach ($cities as $city)
      <tbody>
        <tr>
          <th scope="row">{{ ++$number }}</th>
          <td><a href="{{ route('weather.show', $city->id) }}">{{ $city->city }}</a></td>
          <td>
            @if (auth()->user() !== null && auth()->user()->status === 'admin')
              <form action="{{ route('weather.destroy', $city) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-outline-danger">Delete</button>
              </form>                
            @endif
          </td>
        </tr>
      </tbody>
    @endforeach
  </table>
</div>
@if (auth()->user() !== null && auth()->user()->status === 'admin')
  <div>
    <span class="fst-italic fs-6 float-start">
      If you didn't find your city. You can add its
    </span>
    <a href="{{ route('weather.create') }}" class="btn btn-outline-primary bnt-lg float-end">Add</a>
  </div>
@endif
@endsection
