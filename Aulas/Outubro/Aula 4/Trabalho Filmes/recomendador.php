<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendador de Filmes</title>
</head>

<body>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: rgb(24, 26, 27);
            color: white;
        }

        a {
            color: whitesmoke;
        }

        a:hover {
            font-size: 1.1em;
            transition: all .1s;
        }

        img {
            height: 400px;
            border-radius: 10px;
        }
    </style>

    <?php
    $genero = $_GET['genero'];
    $nacional = isset($_GET['nacional']);

    $acao = ['<h1>Blade Runner 2049</h1>', '<h1>Tropa de Elite</h1>'];
    $anoAcao = ['2017','2007',];
    $cartazAcao = ['src="Cartazes/acao1.png"', 'src="Cartazes/acao2.png"'];
    $ficcao = ['<h1>Star Wars</h1>', '<h1>Loop</h1>'];
    $cartazFiccao = ['src="Cartazes/ficcao1.png"', 'src="Cartazes/ficcao2.png"'];
    $anoFiccao = ['1983','2001'];
    $faroeste = ['<h1>Django</h1>', '<h1>O Bacurau</h1>'];
    $cartazFaroeste = ['src="Cartazes/faroeste1.png"', 'src="Cartazes/faroeste2.png"'];
    $anoFaroeste = ['1966','2019'];
    $terror = ['<h1>Sexta-Feira 13</h1>', '<h1>O Nó do Diabo</h1>'];
    $cartazTerror = ['src="Cartazes/terror1.png"', 'src="Cartazes/terror2.png"'];
    $anoAno = ['1980','2017'];
    
    $x = 0;

    if ($nacional) {
        $x = 1;
    }
    
    switch ($genero) {
        case 'acao':
            echo $acao[$x], '<br>';
            echo $anoAcao[$x], '<br></br>';
            echo "<img $cartazAcao[$x]>";
            break;
        case 'ficcao':
            echo $ficcao[$x], '<br>';
            echo $anoFiccao[$x], '<br></br>';
            echo "<img $cartazFiccao[$x]>";
            break;
        case 'faroeste':
            echo $faroeste[$x], '<br>';
            echo $anoFaroeste[$x], '<br></br>';
            echo "<img $cartazFaroeste[$x]>";;
            break;
        default:
            echo $terror[$x], '<br>';
            echo $anoAno[$x], '<br></br>';
            echo "<img $cartazTerror[$x]>";
    }
    ?>

    <p>
        <a href="filmes.php">Voltar</a>
    </p>
</body>

</html>