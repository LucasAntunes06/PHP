<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F</title>
</head>

<body>
    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
    <?php
    $categoria = $_GET['categoria'];

    switch ($categoria) {
        case 'infantil-a':
            echo 'Categoria Infantil A';
            break;
        case 'infantil-b':
            echo 'Categoria Infantil B';
            break;
        case 'juvenil-a':
            echo 'Categoria Juvenil A';
            break;
        case 'juvenil-b':
            echo 'Categoria Juvenil B';
            break;
        default:
            echo "Categoria adulta";
    }
    ?>

    <p>
        <a href="ex_f_form.php">Voltar</a>
    </p>
</body>

</html>