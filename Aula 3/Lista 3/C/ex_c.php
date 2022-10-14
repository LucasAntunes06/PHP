<?php
    $ano = $_GET['ano'];

    if(isset($_GET['aniversario'])){
        echo 'Você tem ', 2022 - $ano, " anos";
    }
    else{
        echo 'Você tem ', 2021 - $ano, " anos";
    }
    ?>
    <p>
    <a href="ex_c.html">Voltar</a>
    </p>
    