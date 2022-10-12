<?php
    $valor_hospedes = $_GET['hospedes'];
    $numero_hospedes = $_GET['numero_hospedes'];
    $diaria = $valor_hospedes * $numero_hospedes;
    
?>
<h1>Hotel</h1>
<p>O total da diária é : R$ <?php echo $diaria;?></p>
<button><a href="ex_g.html">Calcular novamente</a></button>

<style>*{text-align:center;font-family: Helvetica, Arial, sans-serif;}body{color:whitesmoke; background-color: rgb(40, 40, 40);} a{text-decoration: none;}</style>