<?php
    $produto = $_GET['produto'];
    $desconto = 7/100;
    //echo $desconto;
    $valor_descontado = $produto - $desconto;
    //echo $desconto; 
    //echo '<br></br>';
    //echo $produto - $desconto;
?>
<h1>Lojinha do seu Zé</h1>
<p>O valor com desconto é: R$ <?php echo $valor_descontado;?></p>
<button><a href="ex_f.html">Calcular novamente</a></button>

<style>*{text-align:center;font-family: Helvetica, Arial, sans-serif;}body{color:whitesmoke; background-color: rgb(40, 40, 40);} a{text-decoration: none;}</style>