<?php
    // cookie_gravar.php
    $nome = $_POST['nome'];
    setcookie('nome', $nome);
    header('location:cookie_index.php');