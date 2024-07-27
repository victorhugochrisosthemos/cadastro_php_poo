<?php
session_start();
//CONFIGURAÇÕES DO BANCO DE DADOS
define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','root');
define('BANCO','login');

function limpaPost($dados){
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}