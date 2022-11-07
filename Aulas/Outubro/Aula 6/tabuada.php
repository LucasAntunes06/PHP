<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <h1 style="font-size:5em;">Tabuada</h1>
    <?php

    // for ($i = 1; $i <= 10; $i++) {
    //     echo '<p>6 X '.$i. ' = '. $i*6 .'</p>';
    // }

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo '<p>' . $i . ' X ' . $j . ' = ' . $i * $j . '</p>';
        }
        if ($i != 10) {
            echo '<hr>';
        }
    }

    //PONTO: concatena as strings
    //VÍRGULA: só funciona com echo
    ?>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(29, 29, 29);
            color: white;
            text-align: center;
            box-sizing: border-box;
            padding: 0;
        }

        hr {
            width: 85%;
        }
    </style>
</body>

</html>