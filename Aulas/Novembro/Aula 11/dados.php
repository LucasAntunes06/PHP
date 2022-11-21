<?php
    //dados.php
    $nome = $_POST['user'];
    $senha = $_POST['senha'];

    session_start();
    file_put_contents('nome.php',$_POST['user']);
    file_put_contents('senha.php',$_POST['senha']);
    
    header('location:pagina_inicial.php');