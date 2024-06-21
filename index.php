<?php
class Movie
{
    public $nome;
    public $regista;
    public $durata;

    public function filmERegista()
    {
        return "$this->nome, $this->regista";
    }

    function __construct($nome, $regista, $durata)
    {
        $this->nome = $nome;
        $this->regista = $regista;
        $this->durata = $durata;
    }
}

$singleMovie = new Movie("The Thing", "Carpenter", "1h 49m");
$singleMovie1 = new Movie("Halloween", "Carpenter", "1h 31m");



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <h1>ciao</h1>
    <ul>

    <li>
        <?php echo $singleMovie->filmERegista(); ?>, durata: <?php echo $singleMovie->durata; ?>
    </li>
    <li>
        <?php echo $singleMovie1->filmERegista(); ?>, durata: <?php echo $singleMovie->durata; ?>
    </li>

    </ul>
</body>

</html>