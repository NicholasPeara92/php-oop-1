<?php

  require_once __DIR__ . '/classes/Movie.php';
  require_once __DIR__ . '/classes/db.php';

?>

<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
  </head>
  <body>
    <h1>Film disponibili</h1>

    <ul>

        <?php foreach($movies as $movie) { ?>
          <li>

          <h2><?php echo $movie->title ?></h2>
          <h3><?php echo $movie->movieDirector ?></h3>
          <p>Anno di uscita: <?php echo $movie->year ?></p>
          <p>Durata film in minuti: <?php echo $movie->duration ?></p>
          <p>Prezzo: <?php echo $movie->price ?> €</p>
          <p>Genere: <?php echo implode(", ", $movie->genre)  ?></p>
            
          </li>

          <?php if($movie->discount !== 0) { ?>
          <strong>Prezzo Scontato: <?php echo $movie->discount; ?> €</strong>
          <?php } ?>
        
        <?php } ?>
    </ul>
  </body>
</html>