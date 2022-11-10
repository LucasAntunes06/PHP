<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recados</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="text-center antialiased text-slate-500 text-slate-400 bg-white bg-slate-900 font-mono">
    <h1 class="text-center text-blue-500 font-sans font-semibold">Mensagens</h1>
    <div class="flex flex-row justify-evenly">
        <div>
        <form action="dados.php" method="post"
            <p>
                <label for="nome">Digite seu nome: </label>
                <br>
                <input type="text" placeholder="Digite seu nome" name="nome" class="rounded-lg py-2 px-4 shadow-xl">
            </p>
    
            <label for="msg">Digite a sua mensagem: </label>
            <p>
                <textarea name="msg" id="" cols="30" rows="10" class="rounded-lg py-2 px-4 shadow-xl"></textarea>
            </p>
            <br>
            <input type="submit" value="Enviar" class="active:bg-emerald-800 focus:outline-none focus:ring focus:ring-emerald-300 bg-emerald-500 hover:scale-105 text-emerald-100 px-2 py-1 font-sans font-bold rounded-xl">
            <a href="remover_mensagem.php" class="active:bg-red-500 focus:outline-none focus:ring focus:ring-red-200 bg-red-600 hover:scale-105 text-emerald-100 px-2 py-1 font-sans font-bold rounded-xl">Apagar mensagens</a>
        </div>

        </form>
        <?php
        echo '<div class="flex flex-row items-center justify-center rounded-lg shadow-xl border-slate-50 border-2 w-72">';
        echo '<h3>'.file_get_contents('recados_gravados.php').'</h3>';
        echo '</div>'
    ?>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>