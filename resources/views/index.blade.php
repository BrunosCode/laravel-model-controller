<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laravel Movies</title>
</head>
<body>
  @foreach ($movies as $movie)
    <div class="movie">
      <h2 class="movie__title">{{ $movie["title"] }}</h2>
      <p class="movie__description">Original Title: {{ $movie["original_title"] }}</p>
      <p class="movie__description">Nationality: {{ $movie["nationality"] }}</p>
      <p class="movie__description">Vote: {{ $movie["vote"] }}</p>
    </div>
  @endforeach
</body>
</html>