<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    //arrays_indices.php

    //Tipo um objeto
    $pessoa = [
        'nome' => 'Farido', 
        'idade' => 70,
        'altura' => 1.50,
        'time' => 'Grêmio',
    ];

    // foreach ($pessoa as  $infos) {
    //     echo $infos . "<br>";
    // }

    foreach ($pessoa as  $indice => $infos) {
        echo $indice;
        echo ': ';
        echo $infos;
        echo '<br>';
    }



    ?>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            text-transform: capitalize;
            font-size: 2em;
            background-color: rgb(29, 29, 29);
            color: white;
        }
    </style>
</body>

</html>