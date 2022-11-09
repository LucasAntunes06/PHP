<?php
//Session -> Grava dados; cada uma é única e exclusiva

//** Adicionar um novo valor em um array com números  **
//** $arr = [3,4,5];                                  **
//** $arrr[] = 6;                                     **
//** OU                                               **
//** $arr = ['valores' => []];                        **
//** $arr['valores'][] = 1;                           **

//Sessão é uma variavel global -> $_SESSION
//SEMPRE tem que começar a sessão
//Informação fica salva no servidor
session_start();
// $_SESSION['nome'] = 'Lucas';
print_r($_SESSION);