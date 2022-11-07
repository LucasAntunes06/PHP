<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número sorteado</title>
</head>

<body>
    <h1>Número sorteado</h1>

    <?php
    $min = $_POST['min'];
    $max = $_POST['max'];
    $numSorteado = rand($min, $max);

    echo 'O número sorteado foi: <br><strong>' . $numSorteado . '</strong>';

    ?>
    <br></br>
    <a href="ex_a.html">Voltar</a>
    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            vertical-align: middle;
        }

        body {
            background: #001627;
            color: white;
        }

        h1 {
            color: rgb(66, 192, 248);
            font-weight: bolder;
        }

        input {
            border-radius: 10px;
            border: solid 2px white;
            background-color: #001627;
            color: white;
            padding: 5px;
        }

        a {
            margin-top: 15px;
            border-radius: 10px;
            border: solid 2px white;
            background-color: #001627;
            color: white;
            padding: 5px;
            text-decoration: none;
        }
        a:hover{
            color: #22C55E;
            border: solid 2px #22C55E;
            scale: 1.1;
        }
    </style>
</body>

</html>