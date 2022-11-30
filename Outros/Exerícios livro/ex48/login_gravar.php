<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Bem-vindo(a) '.$_POST['senha']; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="estilo.css">
</head>

<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900 font-mono">

    <div class="flex flex-col justify-center content-center h-screen">

        <h1 class="text-center text-blue-500 font-sans font-semibold">
            LOGIN
        </h1>
        <?php
        //login_gravar.php
        if (isset($_POST['btn'])) {
            if (ucfirst($_POST['user']) == $_POST['senha']) {
                echo '<h3 class="text-emerald-400 text-xl">Usuário válido</h3>';
            } else {
                echo '<h3 class="text-red-500 text-xl">Usuário inválido</h3>';
            }
        }
        ?>
       
</body>

</html>