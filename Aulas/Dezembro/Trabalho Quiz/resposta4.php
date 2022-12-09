<?php
    //resposta5.php
    session_start();
    $resposta = $_POST['log'];
    $_SESSION['log'] = $resposta;
    header('location:pergunta5.php');
