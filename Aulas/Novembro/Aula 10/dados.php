<?php
    //dados.php
    session_start();
    date_default_timezone_set("America/sao_paulo");
    file_put_contents('recados_gravados.php', 'Nome: '.$_POST['nome'].'<br>', FILE_APPEND);
    file_put_contents('recados_gravados.php', 'Data: '.date('d/y').'<br>', FILE_APPEND);
    file_put_contents('recados_gravados.php', 'Hora: '.date('H:i').'<br>', FILE_APPEND);
    file_put_contents('recados_gravados.php', 'Mensagem: '.$_POST['msg'].'<br>', FILE_APPEND);
    file_put_contents('recados_gravados.php', '<br></br>', FILE_APPEND);
    // echo 'Dia: '.date('d/y');
    echo '<br>';
    // echo 'Hora: '.date("H");
    echo file_get_contents('recados_gravados.php');
    header('location:recados.php');