<?php

include_once '../model/Usuario.php';

class UsuarioControl {
    public function ListarTodos() {
        $usuario = new Usuario();
        return $usuario->listarTodosUsuarios();
    }
}
