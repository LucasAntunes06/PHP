<?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $soma = $nota1 + $nota2;
    $media = $soma/2;

    if($media>=7){
        echo 'Você está aprovado :)';
    }
    else{
        echo 'Você está reprovado :(';
    }
?>

<p>
    <a href="ex_b.html">Voltar</a>
</p>