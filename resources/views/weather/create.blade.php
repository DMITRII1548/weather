@extends('layouts.weather')

@section('content')

<div class="mt-4">
    <form action="{{ route('weather.store') }}" method="post">
    @csrf
        <label for="city" class="form-label">City</label>
        <input type="text" id="city" class="form-control" placeholder="city" name="city">
        <div id="city" class="form-text">
            Your city's name must start with a large letter, be real and your city must be in Kazakhstan
        </div>
        <button type="submit" class="btn btn-outline-primary mt-3">Create</button>
    </form>
</div>

@if ($message)
    <script>
        alert("{{ $message }}")
    </script> 
@else

@endif

@endsection