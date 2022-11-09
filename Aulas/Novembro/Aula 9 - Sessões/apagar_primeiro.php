<?php
    //apagar_primeiro.php
    session_start();
    array_shift($_SESSION['compras']);

    header('location:compras.php');