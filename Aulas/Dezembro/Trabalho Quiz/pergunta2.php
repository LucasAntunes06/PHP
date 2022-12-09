<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta 2</title>
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



    <form action="resposta2.php" method="post">
        <div class="flex flex-col justify-center items-center">
            <label for="nome" class="my-4 mx-auto">
                Qual é a porcentagem de uso do PHP na internet?
            </label>

            <p>
                <input type="radio" name="porcentagem" id="78,9" value="78,9">
                <label for="78,9">78,9%</label>
                
            </p>

            <p>
                <input type="radio" name="porcentagem" id="50" value="50">
                <label for="50">50%</label>
            </p>
            
            <p>
                <input type="radio" name="porcentagem" id="0" value=""0>
                <label for="0">0%, o PHP está morto</label>
            </p>
            
            <p>
                <input type="radio" name="porcentagem" id="70,5" value="70,5">
                <label for="70,5">70,5%</label>
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