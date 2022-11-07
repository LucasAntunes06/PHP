<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $maior;
    $iguais = 'Os dois são iguais';

    if($num1 > $num2){
        $maior = $num1;
    }else if($num2 > $num1){
        $maior = $num2;
    }else{
        $maior = 0;
    }

    if($maior === $num1){
        echo 'O primeiro é maior';
    }else if($maior === $num2){
        echo 'O segundo é maior';
    }else{
        echo 'Os dois são iguais';
    }
?>

<p>
    <a href="ex_e.html">Voltar</a>
</p>