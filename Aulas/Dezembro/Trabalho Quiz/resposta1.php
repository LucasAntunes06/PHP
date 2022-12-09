<?php
    //resposta5.php
    session_start();
    $resposta = $_POST['back-end'];
    $_SESSION['back-end'] = $resposta;
    header('location:pergunta2.php');
