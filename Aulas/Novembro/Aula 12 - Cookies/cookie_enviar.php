<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/1047/1047711.png" type="image/x-icon">
</head>
<body class="antialiased text-white bg-slate-900 font-mono text-center mx-0 my-auto text-uppercase">
<form action="cookie_gravar.php" method="POST" class="mt-8">
        <h1 for="nome" class="text-4xl mb-2">Qual é o seu <strong class="text-sky-500">nome</strong>?</h1>    
        <br>
        <input name="nome" type="text"class="rounded-lg px-4 text-slate-900" placeholder="Nome">
        <br>
        <button type="submit" class="bg-green-500 rounded-lg p-2 mt-2 hover:bg-green-600 text-white transition-color">
            Enviar
        </button>
    </form>   
    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>