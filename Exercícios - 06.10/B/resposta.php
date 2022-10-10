<?php

$idade = $_GET['idade'];
$calculo = 100 - $idade;

echo 'Faltam ', $calculo, ' anos para você completar 100 anos!';