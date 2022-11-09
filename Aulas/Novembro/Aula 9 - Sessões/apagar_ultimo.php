<?php
    //apagar_ultimo.php
    session_start();
    array_pop($_SESSION['compras']);

    header('location:compras.php');