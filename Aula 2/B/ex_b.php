<?php
    $nome = $_GET['nome'];
    $endereco = $_GET['endereco'];
    $profissao = $_GET['profissao'];
?>
<h1>Informações</h1>
<p> Nome: <?php echo $nome;?></p>
<p> Endereço: <?php echo $endereco;?></p>
<p> Profissão: <?php echo $profissao;?></p>
<button><a href="ex_b.html">Voltar</a></button>

<style>*{text-align:center;font-family: Helvetica, Arial, sans-serif;}body{color:whitesmoke; background-color: rgb(40, 40, 40);} a{text-decoration: none;}</style>