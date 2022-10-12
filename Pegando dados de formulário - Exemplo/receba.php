<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        @import url('http://fonts.cdnfonts.com/css/qatar2022-arabic');
        *{
            box-sizing: border-box !important;
            font-family: 'Qatar2022 Arabic',Helvetica, Arial,  sans-serif;
        }
        body{
            background-image: linear-gradient(to top right, #640619, #7a042c, #2b070e);
            background-image: url(https://raw.githubusercontent.com/LucasAntunes06/copa-do-mundo-2022/84967c7ef352365425e45d41834b2a91759c0695/Imgs/Background.svg);
            background-size:100%;
            height: calc(100vh - (16px));
            color:whitesmoke;
            text-align:center;
        }
    </style>
<?php
//receba.php
//Este é o arquivo  que rcebe o forumulario.php

//MÉTODOS:
//Get -> Padrão
//Post

$pais = $_GET['pais'];

if($pais == 'Itália'){
    echo 'Essa seleção não está na Copa!';
}
else{
    echo 'Você vai torcer para ',$pais ;
}
?>
    <br> 
    <a style="text-decoration:none; color:whitesmoke;" href="teste.php">Voltar</a>
    </body>
</html>