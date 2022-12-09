<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 3</title>
</head>

<body class="bg-neutral-900 text-white font-mono">
    <?php
    $nome = file_get_contents('nome.json');
    ?>

    <h1 class="text-emerald-600 text-4xl text-center my-4">
        Super quiz
    </h1>

    <h1 class="text-sky-300 text-xl text-center my-4">
        Jogador: <?php echo $nome ?>
    </h1>



    <form action="resposta3.php" method="post">
        <div class="flex flex-col justify-center items-center">
            <label for="nome" class="my-4 mx-auto">
                Qual é não é usado no PHP?
            </label>

            <p>
                <input type="radio" name="nao-usado-php" id="getId" value="getId">
                <label for="getId">document.getElementById</label>
                
            </p>

            <p>
                <input type="radio" name="nao-usado-php" id="session" value="session">
                <label for="session">session_start()</label>
            </p>
            
            <p>
                <input type="radio" name="nao-usado-php" id="hash" value="hash">
                <label for="hash">passord_hash</label>
            </p>
            
            <p>
                <input type="radio" name="nao-usado-php" id="post" value="post">
                <label for="post">$_POST[]</label>
            </p>

            <input type="submit" value="Enviar" class="my-4 bg-emerald-600 rounded-lg px-4 py-2 
            shadow-lg shadow-emerald-600/20 
            hover:shadow-emerald-600/50 cursor-pointer">
    </form>
    </div>

    <style>
        *{
            accent-color: #059669;
        }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>