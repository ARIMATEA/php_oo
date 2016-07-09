<?php

include_once '../model/Especialidade.php';

class EspecialidadeControl {
    public function ListarTodos() {
        $especialidade = new Especialidade();
        return $especialidade->listarTodasEspecialidades();
    }
}
