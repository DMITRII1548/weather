@extends('layouts.weather')

@section('content')
<div class="mt-4">
    <form action="{{ route('weather.store') }}" method="post">
    @csrf
        <label for="City" class="form-label">City</label>
        <input type="text" id="City" class="form-control" placeholder="City" name="sity">
        <div id="City" class="form-text">
            Your city's name must start with a large letter, be real and your city must be in Kazakhstan
        </div>
        <button type="submit" class="btn btn-outline-primary mt-3">Create</button>
    </form>
</div>
@endsection