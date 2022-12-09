<?php
    //gravar_nome.php
    $nome = $_POST['nome'];
    file_put_contents('nome.json', $nome,);
header('location:pergunta1.php');