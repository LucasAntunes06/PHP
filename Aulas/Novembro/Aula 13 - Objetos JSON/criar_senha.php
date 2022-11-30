<?php
    //criar_senhas.php
    $senhas = [
        'lucas' => password_hash('123',PASSWORD_BCRYPT),
        'bernardo' => password_hash('taolhandoque',PASSWORD_BCRYPT),
    ];
    file_put_contents('senhas.json', json_encode($senhas));

    echo 'Senhas criadas com sucesso :-)';