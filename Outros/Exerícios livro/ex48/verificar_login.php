<?php
    //login_gravar.php
    session_start();
    // $user = $_POST['user'];
    // $senha = $_POST['senha'];
    if (isset($_POST['user']) && isset($_POST['senha']) && !empty($_POST['user']) && !empty($_POST['senha'])) {
        echo '<h3 class="text-emerald-400 text-xl">Usuário válido</h3>';
    } else {
        echo '<h3 class="text-red-500 text-xl">Usuário inválido</h3>';
    }

    header('location:login.php');