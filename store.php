<?php
require_once __DIR__ . "/models/Movie.php";
// Da chiedere, se metto include esplode la pagina

$singleMovie = new Movie("The Thing", "Carpenter", "1h 49m");
$singleMovie1 = new Movie("Halloween", "Carpenter", "1h 31m");

$movies = [$singleMovie, $singleMovie1];
// Da chiedere, va fatto così?
// Da chiedere, cos'è partials?