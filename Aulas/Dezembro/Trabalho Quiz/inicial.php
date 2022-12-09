<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>

<body class="bg-neutral-900 text-white font-mono">
    <h1 class="text-emerald-600 text-4xl text-center my-4">
        Super quiz
    </h1>

    <form action="gravar_nome.php" method="post">
        <div class="flex flex-col justify-center items-center text-neutral-900"">
            <label for="nome" class="my-4 mx-auto text-white">
                Digite o seu nome
            </label>

            <input type="text" name="nome" id="nome" class="px-4 rounded-lg">

            <input type="submit" value="Jogar"
            class="my-4 bg-emerald-600 rounded-lg px-4 py-2 
            shadow-lg shadow-emerald-600/20 
            hover:shadow-emerald-600/50 cursor-pointer">
        </div>
    </form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>