<?php

require_once "Pessoa.php";

class Usuario extends Pessoa {
    
    private $email;
    private $nascimento;
    
    public function autenticar() {
        echo "Usuário autenticou no sistema";
    }
    public function sair() {
        echo "Usuário saiu do sistema";
    }
    function getEmail() {
        return $this->email;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }


}
