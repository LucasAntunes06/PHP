<?php
    //criar_arquivo.pph
    //Arquivo para criptografar a senha
    //e guardar mo arwuivo senha.php

    $senha_nova = '123';
    $senha_cripto = password_hash($senha_nova, PASSWORD_BCRYPT);
    echo $senha_cripto;
    file_put_contents('senha.php', $senha_cripto);