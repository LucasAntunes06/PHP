<?php
    $nota1 = $_GET['nota1'];
    $nota2 = $_GET['nota2'];
    $nota3 = $_GET['nota3'];
    $soma = $nota1 + $nota2 + $nota3;
    $media = $soma/3;

    if($media>=7){
        echo 'Você está aprovado :)';
    }
?>

<p>
    <a href="ex_d.html">Voltar</a>
</p>