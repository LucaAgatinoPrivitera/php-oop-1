<?php

// Include del file Movie che contiene la classe
include __DIR__ . "/models/Movie.php";
include __DIR__ . "/store.php";

// // Da chiedere... Singoli film, senza array non so come farli stampare per bene
// $singleMovie = new Movie("The Thing", "Carpenter", "1h 49m");
// $singleMovie1 = new Movie("Halloween", "Carpenter", "1h 31m");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <h1>Lista capolavori (da completare)</h1>
        <h3>Non bonus</h3>
        <ul>

            <li>
                <?php echo $singleMovie->filmERegista(); ?>, durata: <?php echo $singleMovie->durata; ?>
            </li>
            <li>
                <?php echo $singleMovie1->filmERegista(); ?>, durata: <?php echo $singleMovie->durata; ?>
            </li>

        </ul>

        <h3>Bonus</h3>
        <ul>
            <?php foreach ($movies as $movie) : ?>
                <li><?= $movie->filmERegista(); ?>, durata: <?= $movie->durata; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>