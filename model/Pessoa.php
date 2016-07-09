<?php

class Pessoa {

    private $cpf;
    private $rg;
    private $telefone;
    private $nome;
   
    function getCpf() {
        return $this->cpf;
    }

    function getRg() {
        return $this->rg;
    }

    function getTelefone() {
        return $this->telefone;
    }

    function getNome() {
        return $this->nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setRg($rg) {
        $this->rg = $rg;
    }

    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }
    
}
