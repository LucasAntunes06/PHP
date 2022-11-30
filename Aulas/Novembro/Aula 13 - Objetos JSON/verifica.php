<?php
    //verifica.php
    $ler = file_get_contents('senhas.json');
    $senhas = (array) json_decode($ler);
    $user = $_POST['user'];
    $password = $_POST['senha'];
    //Verifica se na lista de senhas existe um índice correspondente
    //ao nome do usuário
    #echo $senhas[$user];
    if (!isset($senhas[$user])){
        header(('location:login.php?erro=1'));
        die;
    }
    //Comparar senha digitada com original
    $senha_orignial = $senhas[$user];
    
    if(password_verify($senha, $senha_orignial)){
        header(('location:login.php?erro=1'));
        die;
    }

    header('location:secreto.php');