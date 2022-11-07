<!DOCTYPE html>
<html lang="PT-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    //arrays.php
    $array = ['abacaxi', 2, 4.6, true, 'Iron Maiden', 'Angra'];

    //Conatar itens do array
    #echo count($array);

    //Verificar um valor real de uma variável
    #var_dump($array);

    //Verificar se determinado indice do array existe (ou uma variável)
    #echo isset($abacaxi); -> False
    #echo isset($array);    
    #echo isset($array[0]);

    //Desafio desafiante desafiador
    //fazer uma repetição para imprimir na 
    // //tela todos os valores do vetor :)
    // for ($i = 0; $i < count($array); $i++) {
    //     echo $array[$i] . "<br>";
    // }
    //Variável usa o $, const não


    //FOREACH
    //para cada valor dentro do array, repete uma vez
    //cria outra variável
    foreach ($array as  $item) {
        echo $item . "<br>";
    }
    ?>

    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            text-transform: capitalize;
            font-size: 2em;
            background-color: rgb(29, 29, 29);
            color: white;
        }
    </style>
</body>

</html>