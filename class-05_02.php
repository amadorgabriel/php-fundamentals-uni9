<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class 05 pt. 2 - 09_09</title>
</head>

<body>
    <h1>Class 05</h1>
    <h4><b>Sumário</b></h4>
    <ol>
        <li>
            <a href="/index.php">Index</a>
        </li>
    </ol>

    <?php
    //echo "<pre>";print_r($_REQUEST);echo "</pre>";
    $nome=$_POST["nome"];
    $senha=$_POST["senha"];
    echo "Nome: $nome<br>";
    echo "Senha: $senha<br>";
    ?>
</body>

</html>