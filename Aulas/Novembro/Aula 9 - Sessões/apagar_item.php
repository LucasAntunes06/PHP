<?php


session_start();
$i = $_GET['i'];
unset($_SESSION['compras'][$i]);

header('location:compras_tunado.php');
