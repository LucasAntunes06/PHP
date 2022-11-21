<?php
session_start();

$senha_existe = false;

if($senha_existe == false){
    file_put_contents('senha.php', $_POST['senha']);
    $user = $_POST['senha'];
    $senha_existe = true;
}

$senha = file_get_contents('senha.php');
$senha_cripto = password_hash($senha, PASSWORD_BCRYPT);

var_dump($x);
// die;
// if($_POST['user'] == 'Lucas' && password_verify($_POST['senha'], $senha)){
if($_POST['user'] == 'Lucas' && password_verify($_POST['senha'], $senha_cripto)){
// if($_POST['user'] == 'Lucas' && $_POST['senha'] == $senha){
    $_SESSION['usuario'] = $_POST[ 'user'];
    header('location: secreto.php');
    // die;
}else{
    header('location: pagina_inicial.php?erro=1');
}