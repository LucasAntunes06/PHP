<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recomendador de filmes</title>
</head>

<body>
    <h1>Recomendador de filmes</h1>
    <form action="recomendador.php" method="get"  >
       <select id="genero" name="genero">
            <option value="acao" name="acao" id="acao">Ação</option>
            <option value="ficcao" id="infantil-b">Ficção Científica</option>
            <option value="faroeste">Faroeste</option>
            <option value="terror">Terror</option>
       </select>
       <br></br>
       <input type="checkbox" name="nacional"></input>
       <label for="nacional">Nacional</label>
       <p>
            <input type="submit" value="Enviar">
        </p>

    </form>

    <style>
        *{
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            text-align: center;
            background-color: rgb(24, 26, 27);
            color: white;
        }
        input{
            border: none;
            background-color: white;
            color: rgb(24, 26, 27);
            padding: 3px 10px;
            border-radius: 8px;
        }
        select{
            border-radius: 5px;
        }
    </style>
</body>

</html>