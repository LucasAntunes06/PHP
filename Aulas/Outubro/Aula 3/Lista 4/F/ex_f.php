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
        * {
            font-weight: bold;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

        }
    </style>
    <h1>Categoia escolhida</h1>
    <?php
    $categoria = $_GET['idade'];

    if ($categoria >= 5) {
        switch ($categoria) {
            case $categoria >= 5 && $categoria <= 7:
                echo '<form action="ex_f.php" method="get" >
                <select id="categoria" name="categoria">
                     <option value="infantil-a">Infanil A</option>
                </select>
                </form>';
                break;
            case $categoria <= 10:
                echo '<form action="ex_f.php" method="get" >
                <select id="categoria" name="categoria">
                     <option value="infantil-a">Infantil B</option>
                </select>
                </form>';
                break;
            case $categoria <= 13:
                echo '<form action="ex_f.php" method="get" >
                <select id="categoria" name="categoria">
                     <option value="infantil-a">Juvenil A</option>
                </select>
                </form>';
                break;
            case $categoria <= 17:
                echo '<form action="ex_f.php" method="get" >
                <select id="categoria" name="categoria">
                     <option value="infantil-a">Juvenil B</option>
                </select>
                </form>';
                break;
            case $categoria >= 18:
                echo '<form action="ex_f.php" method="get" >
                <select id="categoria" name="categoria">
                     <option value="infantil-a">Sênior</option>
                </select>
                </form>';
                break;
        }
    } else {
        echo 'Você não possui idade suficiente para participar da competição';
    }
    ?>

    <p>
        <a href="ex_f_form.php">Voltar</a>
    </p>
</body>

</html>