<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secreto</title>
</head>

<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">
    <div class="flex flex-col justify-center items-center">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight dark:text-slate-200">
            Usuários e senhas
        </h1>

        <table class="my-8 p-12 border-slate-800 dark:border-slate-200 border-1 rounded-lg bg-white dark:bg-slate-800 dark:text-white cursor-pointer text-left rounded-lg shadow-lg border-collapse p-4 shadow-grey-50/50 hover:shadow-grey-100/90 dark:shadow-black dark:hover:shadow-grey-100/9 tetx-sm">
            <thead class="border-b border-slate-800 text-center">
                <th>Nomes</th>
                <th>Senhas</th>
                </tehad>
            <tbody class="text-sm">

                <?php
                //secreto.php
                $nomes = ['lucas', 'bernardo'];
                $senhas = ['123', 'taolhandoque'];


                for ($i = 0; $i <= 1; $i++) {
                    echo '<tr class="dark:hover:bg-slate-600 bg-grey-100 cursor-pointer">';
                    echo '<td class="px-8 text-sky-400 text-bold">' . $nomes[$i] . '</td>';
                    echo '<td class="px-8 text-indigo-400 text-bold">' . $senhas[$i] . '</td>';
                }

                echo '</tr>';
                echo '</tbody>';
                echo '</table>';
                ?>
                <button class="active:bg-emerald-800 focus:outline-none focus:ring focus:ring-emerald-300 bg-emerald-500 hover:scale-105 text-emerald-100 px-2 py-1 font-sans font-bold rounded-full">
                    <a href="login.php">Voltar</a>
                </button>
    </div>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>