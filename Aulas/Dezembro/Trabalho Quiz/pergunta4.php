<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 5</title>
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



    <form action="resposta4.php" method="post">
        <div class="flex flex-col justify-center items-center">
            <label for="nome" class="my-4 mx-auto">
                log<sub>10</sub>10?
            </label>

            <p>
                <input type="radio" name="log" id="10²" value="10²">
                <label for="10²">10²</label>
                
            </p>

            <p>
                <input type="radio" name="log" id="100" value="100">
                <label for="100">100</label>
            </p>
            
            <p>
                <input type="radio" name="log" id="10" value="10">
                <label for="10">10</label>
            </p>
            
            <p>
                <input type="radio" name="log" id="1" value="1">
                <label for="1">1</label>
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