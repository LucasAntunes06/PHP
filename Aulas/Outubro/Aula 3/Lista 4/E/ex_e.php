<?php
$idade = $_GET['idade'];
?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
            switch ($idade) {
                case $idade < 18:
                    echo 'Menor de idade';
                    break;
                case $idade < 60:
                    echo 'Maior de idade';
                    break;
                default:
                    echo 'Idoso(a)';
            }
            ?></title>
</head>

<body>
    <style>
        * {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
</body>

</html>

<?php

switch ($idade) {
    case $idade < 18:
        echo 'Você é menor de idade';
        break;
    case $idade < 60:
        echo 'Você é maior de idade';
        break;
    default:
        echo 'Você é idoso(a)';
}

?>

<p>
    <a href="ex_e_form.php">Voltar</a>
</p>