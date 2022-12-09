<?php
    //respostas.php
    session_start();
    $acertos = 0;
    $nome = file_get_contents('nome.json');
    $resposta1 = $_SESSION['back-end'];
    $resposta2 = $_SESSION['porcentagem'];
    $resposta3 = $_SESSION['nao-usado-php'];
    $resposta4 = $_SESSION['log'];
    $resposta5 = $_SESSION['css-bold'];


    if ($resposta1 == 'php') $acertos++;
    if ($resposta2 == '78,9') $acertos++;
    if ($resposta3 == 'getId') $acertos++;
    if ($resposta4 == '1') $acertos++;
    if ($resposta5 == 'weight') $acertos++;

    $porcentagem = ($acertos * 100) / 5;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>

<body class="bg-neutral-900 text-white font-mono">
    <h1 class="text-emerald-600 text-4xl text-center my-4">
        Super quiz
    </h1>

    <h1 class="text-sky-300 text-xl text-center my-4">
        Jogador: <?php echo $nome ?>
    </h1>

    <?php
    if ($porcentagem < 50) {
        echo '<h1 class="text-red-600 text-4xl text-center my-4">Pontuação:';
        echo $porcentagem;
        echo '%</h1>';
    } else {
        echo '<h1 class="text-emerald-600 text-4xl text-center my-4">Pontuação:';
        echo $porcentagem;
        echo '%</h1>';
    }
    ?>

    <div class="flex justify-center">
        <a href="inicial.php" class="my-4 bg-emerald-600 rounded-lg px-4 py-2 
    shadow-lg shadow-emerald-600/20 
    hover:shadow-emerald-600/50 cursor-pointer mx-auto">
            Jogar de novo
        </a>
    </div>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>