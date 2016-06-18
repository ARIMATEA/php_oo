<?php

class Usuario {
    public $email;
    public $nome;
    public $nascimento;
    
    public function autenticar() {
        echo "Usuário autenticou no sistema";
    }
    public function sair() {
        echo "Usuário saiu do sistema";
    }
}
