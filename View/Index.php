<?php
    require_once '../model/Usuario.php';

    $primeiro_usuario = new Usuario();
    $primeiro_usuario->nome = "Arimatea";
    $primeiro_usuario->email = "arilafayette@gmail.com";
    $primeiro_usuario->nascimento = "03/06/1963";

    echo $primeiro_usuario->nome;
    $primeiro_usuario->autenticar();
              
?>