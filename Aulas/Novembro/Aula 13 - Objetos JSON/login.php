<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo 'Página inicial'; ?></title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/5087/5087579.png" type="image/x-icon">
</head>

<body class="antialiased text-slate-400 bg-slate-900 font-mono">
    
    <div class="flex flex-col justify-center content-center h-screen">
        
        <h1 class="mt-8 text-6xl text-center text-blue-500 font-sans font-semibold">
            LOGIN
        </h1>

        <div class="bg-sky-100 w-96 h-96 flex flex-col items-center justify-center m-auto rounded-lg shadow-xl">
            <div class="bg-slate-900 w-28 h-28 rounded-full shadow-xl mb-4">
                <img id="foto" src="http://cdn.onlinewebfonts.com/svg/img_568656.png" class="height-16 rounded-full invert">
            </div>
            <div class="flex flex-col items-center justify-center gap-y-8">
                <form action="verifica.php" method="POST">
                    <input type="text" name="user" placeholder="Digite seu usuário" class="
                    focus:outline-none focus:ring 
                    focus:ring-slate-300 rounded-lg shadow-lg border-slate-400 border-2
                     mb-4 h-9 text-center">
                    <br>
                    <input type="password" name="senha" placeholder="Digite sua senha" class="focus:outline-none focus:ring focus:ring-slate-300 rounded-lg shadow-lg border-slate-400 border-2 mb-4 h-9 text-center">
                    <br>
                    <div class="flex flex-row justify-center">
                        <input id="btn" name="btn" class="active:bg-emerald-800 focus:outline-none 
                        focus:ring focus:ring-emerald-300 bg-emerald-500 hover:scale-105 text-emerald-100 px-2 py-1 font-sans 
                        font-bold rounded-full" type="submit" value="Adiconar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>