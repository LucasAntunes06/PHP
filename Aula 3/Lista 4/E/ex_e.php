<?php
    $idade = $_GET['idade'];
    
    if($idade<18){
        echo 'Você é menor de idade';
    }
    else if($idade<60){
        echo 'Você é maior de idade';
    }
    else{
        echo 'Você é idoso(a)';
    }
?>

<p>
    <a href="ex_e.html">Voltar</a>
</p>