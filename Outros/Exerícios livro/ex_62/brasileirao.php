<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeonato Brasileiro</title>
    <link rel="shortcut icon" href="https://upload.wikimedia.org/wikipedia/pt/1/18/Campeonato_Brasileiro_de_Futebol_de_2022_-_S%C3%A9rie_A.png" type="image/x-icon">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/pt/1/18/Campeonato_Brasileiro_de_Futebol_de_2022_-_S%C3%A9rie_A.png" type="image/x-icon">
    <link rel="mask-icon" href="https://upload.wikimedia.org/wikipedia/pt/1/18/Campeonato_Brasileiro_de_Futebol_de_2022_-_S%C3%A9rie_A.png" color="#f55a2a">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="estilo.css"> -->
    </link>
</head>
<!-- Dado um array com nomes e pontos dos times, exiba-os
em ordem crescente ou decrescente. Para -->
<body>
    <img id="logo" src="https://upload.wikimedia.org/wikipedia/pt/1/18/Campeonato_Brasileiro_de_Futebol_de_2022_-_S%C3%A9rie_A.png">
    <h3 id="title-brasileirao">Brasileirão 2022</h3>
    <h1>Classificação</h1>

    <table class="table">
        <tr>
            <th>
                Time
                <a href="brasileirao.php?tipo=nome&ordem=asc"><i class="bi bi-arrow-up"></i></a>
                <a href="brasileirao.php?tipo=nome&ordem=desc"><i class="bi bi-arrow-down"></i></a>
            </th>
            <th>
                Pontos
                <a href="brasileirao.php?ordem=asc"><i class="bi bi-arrow-up"></i></a>
                <a href="brasileirao.php?ordem=desc"><i class="bi bi-arrow-down"></i></a>
            </th>
        </tr>

        <?php
        $times['Palmeiras'] = 74;
        $times['Inter'] = 64;
        $times['Flamengo'] = 61;
        $times['Fluminense'] = 58;
        $times['Corinthians'] = 57;
        $times['Athletico'] = 51;

        $ordem = 'asc';
        // isset($_GET['ordem']) ? $ordem = $_GET['ordem'] : '';
        if (isset($_GET['ordem'])) {
            $ordem = $_GET['ordem'];
        }
        $tipo = 'nome';
        // isset($_GET['tipo']) ? $tipo = $_GET['tipo'] : '';
        if (isset($_GET['tipo'])) {
            $tipo = $_GET['tipo'];
        }
        // switch ($tipo && $ordem) {
        //     case 'nome' && 'desc':
        //         krsort($times);
        //         break;
        //     case 'pontos' && 'desc':
        //         arsort($times);
        //         break;
        //     case 'nome' && 'asc':
        //         krsort($times);
        //         break;
        //         dafeult:
        //         arsort($times);
        // }

        // if ($tipo == 'nome' && $ordem == 'desc') {
        //     krsort($times);
        // } elseif ($tipo == 'pontos' && $ordem == 'desc') {
        //     arsort($times);
        // } elseif ($tipo == 'nome' && $ordem == 'asc') {
        //     krsort($times);
        // } else {
        //     arsort($times);
        // }

        if ($ordem == 'desc') {
            rsort($times);
        } else {
            sort($times);
        }

        foreach ($times as $nome => $pontos) {
            echo '<tr><td>' . $nome . '</td>';
            echo '<td>' . $pontos . '</td></tr>';
        }

        ?>
    </table>

    <style>
        * {
            color: white;
            text-align: center;
            /* color: #c4fc00; */
            font-family: 'Poppins', sans-serif;
            /* color: #011627; */
        }

        body {
            background-color: white;
            color: #011627;
        }

        .table {
            max-width: 40%;
            flex-wrap: wrap;
            border: solid 3px #c4fc00;
            margin: 0 auto;
            color: white !important;
            background-image: url(https://brasileiraoassai.com.br/barrasuperior/img/footer-textura.jpg);
        }

        #logo{
            height: 4em;
            margin-top: 10px;
        }

        h1, h3{
            color:#011627;
        }
    </style>
</body>

</html>