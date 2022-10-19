<?php
    $num = $_GET['num'];
    if($num > 0){
        echo 'O número é positivo';
    }
    else if($num < 0){
        echo 'O número é negativo';
    }
    else{
        echo 'O número é neutro';
    }
?>

<p>
    <a href="ex_b_form.php">Voltar</a>
</p>