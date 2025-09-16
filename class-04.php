<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 04 - 02_09</title>
</head>

<body>
    <h1>Class 04</h1>
    <h4><b>Sumário</b></h4>
    <ol>
        <li>
            <a href="/index.php">Index</a>
        </li>
    </ol>

    <?php
    define('ESTUDANTE', 'Bete');
    $av1=8.5;
    $av2=5;
    echo "Estudante: ".ESTUDANTE;
    echo"<br>Av1: $av1";
    echo"<br>Av2: $av2";
    echo"<br>Média: ".(($av1+$av2)/2);
    ?>
</body>

</html>