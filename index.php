<?php
    require_once __DIR__ . '/movieClass.php';

    $primoFilm = new Movie("StarWars", "Fantascienza", "https://multiplayer.net-cdn.it/thumbs/images/2022/05/27/star_wars_jpg_1400x0_q85.jpg");
    $secondoFilm = new Movie("Pulp Fiction", " Thriller","https://m.media-amazon.com/images/I/81UTs3sC5hL._SL1500_.jpg");
    $terzoFilm = new Movie("Il Signore degli Anelli", "Fantasy", "https://pad.mymovies.it/filmclub/2002/01/011/coverlg_home.jpg");
    
    $newArray = [];

    
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>MoviePhPClass</title>
    </head>
    <body>
        <div class="container">
            <?php
                $primoFilm->getTitleGenresUrl();
                $secondoFilm->getTitleGenresUrl();
                $terzoFilm->getTitleGenresUrl();
            ?>
        </div>
    </body>
</html>