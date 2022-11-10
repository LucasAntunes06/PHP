<?php
    //remover_mensagem.php
    file_put_contents('recados_gravados.php', '');
    header('location:recados.php');