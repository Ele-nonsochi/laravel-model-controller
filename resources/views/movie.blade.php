<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Movie</title>
</head>
<body>
    <div class="py-4 d-flex flex-wrap justify-content-center">
        @foreach ($movies as $movie)
        <div class="card col-3 m-2">
            <div class="card-body">
                <h5>Titolo: {{$movie->title}}</h5>
                <h5>Titolo originale: {{$movie->original_title}}</h5>
                <h5>Nazionalità: {{$movie->nationality}}</h5>
                <h5>Uscita: {{$movie->date}}</h5>
                <h5>Voto: {{$movie->vote}}</h5>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>