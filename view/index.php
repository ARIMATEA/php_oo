<?php
    require_once '../model/Usuario.php';

     $primeiro_usuario = new Usuario();
     $primeiro_usuario->setNome('Ariamtea');
     $primeiro_usuario->setEmail('arilafayette@gmail.com');     
     
     echo $primeiro_usuario->getEmail();
     echo $primeiro_usuario->getNome();
     ?>