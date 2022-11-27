<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="antialiased text-white bg-slate-900 font-mono text-center mx-0 my-auto text-uppercase">

    <?php
    // cookie_ler.php
    $nome_do_cookie = $_COOKIE['nome'];
    echo '<h1 class="text-4xl my-8">Olá, <strong class="text-sky-500">' . $nome_do_cookie . '</strong>!</h1>';
    ?>

    <a href="cookie_index.php" class="bg-green-500 rounded-lg p-2 hover:bg-green-600 text-white transition-color">
        <i class="fa-solid fa-arrow-left"></i> Voltar
    </a>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>