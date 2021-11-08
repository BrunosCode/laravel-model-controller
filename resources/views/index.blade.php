<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset("css/app.css") }}">
  <title>Laravel Movies</title>
</head>
<body>
  <main class="main grid--3col">
    @foreach ($movies as $movie)
      <div class="movie text--center">
        <h2 class="movie__title">{{ $movie["title"] }}</h2>
        <p class="movie__text">Original Title: <span class="movie__info">{{ $movie["original_title"] }}</span></p>
        <p class="movie__text">Nationality: <span class="movie__info">{{ $movie["nationality"] }}</span></p>
        <p class="movie__text">Vote: <span class="movie__info">{{ $movie["vote"] }}</span></p>
      </div>
    @endforeach
  </main>
</body>
</html>