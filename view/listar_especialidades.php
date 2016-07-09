<?php

include_once '../control/EspecialidadeControl.php';
$especialidadeControl = new EspecialidadeControl();

?>
<?php 



?>
<table>
    
    <tr>
        <th>ID</th>
        <th>Nomes</th>
    </tr>
    <?php
           foreach ($especialidadeControl->ListarTodos() as $especialidade) {
    ?>    
    <tr>
        <td><?php echo $especialidade->id; ?></td>
        <td><?php echo $especialidade->nome; ?></td>
    </tr>
    
<?php   } ?>  
    
</table>
