<?php
//compras_gravar.php
    //Adiciona o item na lista
    session_start();
    if (isset($_POST['comprinha']) && 
        !empty($_POST['comprinha'])
        && !in_array($_POST['comprinha'],
        $_SESSION['compras'])) {
        $_SESSION['compras'][] = $_POST['comprinha'];
    }

    //Manda a pessoa para a página compras.php (redirecionamento)
    header('location:compras.php')
    
?>