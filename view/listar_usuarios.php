<?php

include_once '../control/UsuarioControl.php';
$usuarioControl = new UsuarioControl();
?>

<table>
    <tr> 
        <th>IDENT</th> 
        <th>NOME</th>
    </tr>

<?php 
foreach ($usuarioControl->ListarTodos() as $usuario) {
?>    
    <tr>
        <td><?php echo $usuario->email; ?></td>
        <td><?php echo $usuario->nome; ?></td>
    </tr>
      
<?php } ?>
</table>

