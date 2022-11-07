<?php   
    // ex_if.php
    $negrito = $_GET['negrito'];

    if($negrito){
        echo '<strong>Mensagem</strong>';
    }
    else{
        echo 'Mensagem';
    }