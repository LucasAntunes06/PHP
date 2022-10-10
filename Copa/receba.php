<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css"></link>
</head>
<body>
<?php
//receba.php
//Este é o arquivo  que rcebe o forumulario.php

//MÉTODOS:
//Get -> Padrão
//Post

echo 'Você vai torcer por/pela ';
echo $_GET['pais'];
?>

<style>
        body{
            background-image: url(Fundo.png) !important;
            background-size: cover;
        }
        form{
            font-size: 2em;
        }
        input{
            padding: 10px;
            border-radius: 20px;
            color: var(--qatar);
            background-color: var(--offWhite);
        }
        button{
            color: var(--qatar);;
            border: none;
        }
    </style>
</body>
</html>