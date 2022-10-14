<?php
    $valor = $_GET['valor'];

    if($valor <= 100){
        echo 'Ruim';
    }
    else if($valor <= 300){
        echo 'Razoável';
    }
    else if($valor <= 500){
        echo 'Bom';
    }
    else{
        echo 'Excelente';
    }
?>

<p>
    <a href="ex_f.html">Voltar</a>
</p>