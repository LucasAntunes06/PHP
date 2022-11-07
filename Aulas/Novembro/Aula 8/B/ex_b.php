<?php
    $corEscolhida = $_POST['cor'];
    $poema = '<p>
    Minha terra tem palmeiras,<br>
    Onde canta o Sabiá;<br>
    As aves, que aqui gorjeiam<br>
    Não gorjeiam como lá<br>
    <b>Canção do Exílio (Gonçalves Dias)</b>
    </p>';


    switch ($corEscolhida) {
        case "vermelho":
            echo '<body style = "background-color: #dc2626">';
            echo $poema;
            break;
        case "verde":
            echo '<body style = "background-color: #16a34a">';
            echo $poema;;
            break;
        case "azul":
            echo '<body style = "background-color: #0ea5e9">';
            echo $poema;;
            break;
        case "amarelo":
            echo '<body style = "background-color: #fde047">';
            echo $poema;;
            break;
        case "laranja":
            echo '<body style = "background-color: #fb923c">';
            echo $poema;;
            break;
        default:
            echo '<body style = "background-color: #ec4899">';
            echo $poema;;
    }

?>

<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $corEscolhida; ?></title>
</head>

<br></br>
<a href="ex_b.html">Voltar</a>
<style>
    * {
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        text-align: center;
        vertical-align: middle;
        text-transform: capitalize;
    }

    body {
        color: white;
    }

    p{
        filter: drop-shadow(0 4px 3px rgb(0 0 0 / 0.2));
        background-color: rgba(0,0,0,0.5);
        border-radius: 20px;
        padding: 10px;
    }

    a {
        margin-top: 15px;
        border-radius: 10px;
        border: solid 2px white;
        background-color: rgba(red, green, blue, 0);
        color: white;
        padding: 5px;
        text-decoration: none;
        box-shadow: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
    }

</style>
</body>

</html>