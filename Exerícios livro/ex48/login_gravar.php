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
        <div class="bg-sky-100 w-96 h-96 flex flex-col items-center justify-center m-auto rounded-lg shadow-xl">
            <div class="bg-slate-900 w-28 h-28 rounded-full shadow-xl mb-4">
                <img id="foto" src="https://avatars.githubusercontent.com/u/104913618?v=4" class="height-16">
            </div>
            <div class="flex flex-col items-center justify-center gap-y-8">
                <form action="login_gravar.php" method="POST">
                    <p class="font-semibold text-slate-500 font-sans">SENHA:</p>
                    <p class="font-bold text-slate-900"><?php echo $_POST['user']?></p>

                    <p class="font-semibold text-slate-500 font-sans">SENHA:</p>
                    <p class="font-bold text-slate-900"><?php echo $_POST['senha']?></p>

                    <div class="flex flex-col justify-center">
                        <input id="btn" name="btn" class="active:bg-emerald-800 focus:outline-none focus:ring focus:ring-emerald-300 bg-emerald-500 hover:scale-105 text-emerald-100 px-2 py-1 font-sans font-bold rounded-full" type="submit" value="Adiconar">
                        
                        <button id="btn-2" class="active:bg-sky-800 focus:outline-none focus:ring focus:ring-sky-300 bg-sky-500 hover:scale-105 text-sky-100 px-2 py-1 font-sans font-bold rounded-full mt-4">
                            <a href="pagina_inicial.php">Recarregar página</a>
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>

</html>