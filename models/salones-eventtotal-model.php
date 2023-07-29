<?php
// Importa la clase SalonesEventTotal
require('../views/salones-eventtotal-view.php');

// Crea una instancia de la clase SalonesEventTotal
$salonesObj = new SalonesEventTotal();

// Obtiene los salones de eventos de la base de datos utilizando el método get_Salones()
$get_salones = $salonesObj->get_Salones();
?>

<!-- Luego, en la parte del código donde se muestra la tabla -->
<?php if (is_array($get_salones) && !empty($get_salones)): ?>
    <?php foreach ($get_salones as $salon): ?>
        <!-- Código para mostrar la tabla y los datos de los salones de eventos aquí -->
        <tr>
            <td style="text-align: center;"><?php echo $salon['id_s']; ?></td>
            <td style="text-align: center;"><?php echo $salon['nombre_s']; ?></td>
            <td style="text-align: center;"><?php echo $salon['cap_personas_s']; ?></td>
            <td style="text-align: center;"><?php echo $salon['estado_s']; ?></td>
            <td style="text-align: center;"><?php echo $salon['imagenes_s']; ?></td>
            <td style="text-align: center;"><?php echo $salon['id_u']; ?></td>
            <td>
                <!-- Código para los botones de editar y borrar aquí -->
            </td>
        </tr>
    <?php endforeach; ?>
<?php else: ?>
    <tr>
        <td colspan="6" style="text-align: center;">No hay salones de eventos disponibles.</td>
    </tr>
<?php endif; ?>
