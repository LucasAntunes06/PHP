<?php
    //resposta5.php
    session_start();
    $resposta = $_POST['porcentagem'];
    $_SESSION['porcentagem'] = $resposta;
    header('location:pergunta3.php');
