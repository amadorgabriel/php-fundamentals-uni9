<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 03 - 02_09</title>
</head>

<body>
    <h1>Class 03</h1>
    <h4><b>Sumário</b></h4>
    <ol>
        <li>
            <a href="/index.php">Index</a>
        </li>
    </ol>

    <?php
    define('USER', 'admin');
    $nome = "Bete";
    $dia = 2;
    $nota = 7.8;
    $cep = 01012123;

    // echo USER . " - " . $nome . " - " . $dia . " - " . $nota;
    echo USER." - $nome - $dia - $nota";
    echo "<br>";
    var_dump($nome)

    ?>
</body>

</html>