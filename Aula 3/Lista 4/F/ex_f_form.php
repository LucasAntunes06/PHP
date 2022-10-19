<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F</title>
</head>

<body>

    <form action="ex_f.php" method="get" >
       <select id="categoria" name="categoria">
            <option value="infantil-a" name="infantil-a" id="infantil-a">Infanil A</option>
            <option value="infantil-b" id="infantil-b">Infanil B</option>
            <option value="juvenil-a">Juvenil A</option>
            <option value="juvenil-b">Juvenil B</option>
            <option value="adulto">Adulto</option>
       </select>
       <p>
            <input type="submit" value="Enviar">
        </p>

    </form>

    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
        }
    </style>
</body>

</html>