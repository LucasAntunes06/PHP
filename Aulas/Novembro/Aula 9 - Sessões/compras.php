<h1>Lista de compras</h1>
<?php
    //compras.php
    session_start(); //Inica sessão

    //Se não houver, crie uma
    if(!isset($_SESSION['compras'])){
        $_SESSION['compras'] = [];
    }

    //Já existe um lista?
    
    if(isset($_SESSION['compras'])){
        echo '<ol>';
        foreach ($_SESSION['compras'] as $cp) {
            echo '<li>' . $cp . '</li>';
        }
        echo '</ol>';
    }
    else{
        echo '<h2 style="color:crimson;">Sua lista está vazia!</h2>';
    }

    ?>
<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compras</title>
</head>

<body>

    <form action="compras_gravar.php" method="POST">
        <input type="text" name="comprinha" placeholder="Adicionar compra">
        <input type="submit" value="Adiconar">
    </form>

    <div style="display: flex; flex-direction:row; justify-content:center; gap:5px;">
    <p>
        <button>
            <a href="compras_esvaziar.php">Esvaziar lista</a>
        </button>
    </p>
    
    <p>
        <button>
            <a href="apagar_ultimo.php">Apagar o último</a>
        </button>
    </p>

    <p>
        <button>
            <a href="apagar_primeiro.php">Apagar o primeiro</a>
        </button>
    </p>
    </div>

    <style>
        * {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            text-align: center;
            vertical-align: middle;
            text-transform: capitalize;
        }

        body {
            background: #001627;
            color: white;
        }

        h1, h3 {
            color: rgb(66, 192, 248);
            font-weight: bolder;
            text-transform:uppercase;
        }

        input {
            border-radius: 10px;
            border: solid 2px white;
            background-color: #001627;
            color: white;
            padding: 5px;
        }
        a{
            color: white;
            font-weight: bolder;
            text-decoration: none;
            /* border: solid 2px white;
            padding: 5px;
            border-radius: 10px; */
        }
        button:hover{
            scale: 1.1;
        }
        button{
            border: solid 2px white;
            padding: 5px;
            border-radius: 10px;
            background-color: rgba(0,0,0,0);
        }
    </style>
</body>

</html>