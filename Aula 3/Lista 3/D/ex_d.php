<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $maior;
    $menor;

    if($num1 > $num2){
        $maior = $num1;
        $menor = $num2;
    }else if($num2 > $num1){
        $maior = $num2;
        $menor = $num1;
    }

    echo 'A metade do maior é: ', $maior / 2, '<br>';
    echo 'O dobro do menor é: ', $menor * 2 ,'<br>';
?>

<p>
    <a href="ex_d.html">Voltar</a>
</p>