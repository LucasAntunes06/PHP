<?php
    //sair.php
    session_start();
    file_put_contents('senha.php',"");
    session_destroy();
    header('location:pagina_inicial.php');