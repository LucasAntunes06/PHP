<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercíco B</title>
</head>

<body>
    <form method="get">
        <label for="resposta">Digite o valor de X: </label><br>
        <input name="resposta" id="resposta" type="text">
        <p>
            <input type="submit" value="Enviar">
        </p>
        <label for="resposta2">Digite o valor de Y: </label><br>
        <input name="resposta2" id="resposta2" type="text">
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
    <form method="get">

    </form>

    <?php

    $x = $_GET["resposta"];
    $y = $_GET["resposta2"];

    // echo $y;
    // echo $x;

    $z = $x;
    $x = $y;
    $y = $z;

    if($z == $y){
        echo $y; 
        echo '<br>';
        echo $x;

    }


    ?>
</body>

</html>