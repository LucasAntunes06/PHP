<?php
    //resposta5.php
    session_start();
    $resposta = $_POST['nao-usado-php'];
    $_SESSION['nao-usado-php'] = $resposta;
    header('location:pergunta4.php');
