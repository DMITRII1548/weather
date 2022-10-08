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
</body>
</html>