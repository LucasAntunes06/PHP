<?php
//ex_a.php

    //Criação de variáveis locais importando valores do $_GET
    $compra = $_GET['compra'];
    $recebido = $_GET['recebido'];
    //Calcula o troco
    $troco = $recebido - $compra;

?>
<h1>
        Super Calculador de Troco 2.0
</h1>
<p>Seu troco é: R$ <?php echo $troco;?></p>
<button><a href="ex_a.html">Calcular novamente</a></button>


<style>*{text-align:center;font-family: Helvetica, Arial, sans-serif;}body{color:whitesmoke; background-color: rgb(40, 40, 40);} a{text-decoration: none;}</style>
