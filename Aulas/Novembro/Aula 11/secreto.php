<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secreto</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="antialiased text-slate-400 bg-slate-900 font-mono">
    
    <?php
    session_start();
    echo '<h1 class="text-center text-blue-500 font-sans font-semibold">Olá ' . $_SESSION['usuario'] . !'</h1>';
    echo '<div class="bg-sky-100 w-96 h-96 flex flex-col items-center justify-center m-auto rounded-lg shadow-xl">
    <div class="bg-slate-900 w-28 h-28 rounded-full shadow-xl mb-4">
        <img id="foto" src="http://cdn.onlinewebfonts.com/svg/img_568656.png" class="height-16 invert">
    </div>
    <div class="flex flex-row items-center justify-center gap-8 mt-8">
    <a href="pagina_inicial.php" class="bg-emerald-500 p-2 rounded-lg shadow-lg shadow-emerald-800/70 w-28 hover:shadow-emerald-800/70 text-white mx-auto">Voltar</a>
    <a href="sair.php" class="bg-red-700 p-2 rounded-lg shadow-lg shadow-red-800/70 w-28 hover:shadow-red-400/70 text-white mx-auto">Sair</a>
</div>
</div>';

//A pessoa está autenticada?
if (!isset($_SESSION['usuario'])) {
    header(('location:login.php'));
}
    ?>
    <br>
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>