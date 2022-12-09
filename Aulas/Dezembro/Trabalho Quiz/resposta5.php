<?php
    //resposta5.php
    session_start();
    $resposta = $_POST['css-bold'];
    $_SESSION['css-bold'] = $resposta;
    header('location:respostas.php');
