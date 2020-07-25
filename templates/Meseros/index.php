<div class="container-fluid mt-2">
    <h2 class="text-center">Lista de meseros</h2>
    <?php echo $this->Html->link(
        'Crear nuevo mesero',
        ['controller' => 'meseros', 'action' => 'nuevo'],
        ['class' => 'btn btn-dark float-right mb-3']
                    // En caso de querer que se habra en otra pagina se coloca , 'target' => '_blank' delado de la clase
    ); ?>
    <table class='table mx-auto mt-3' style="max-width: 110em">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <?php foreach ($meseros as $mesero):?>
            <tr>
                <td><?php echo $mesero->id; ?></td>
                <td><?php echo $mesero->cedula; ?></td>
                <td><?php echo $mesero->nombre; ?></td>
                <td><?php echo $mesero->apellido; ?></td>
                <td><?php echo $mesero->telefono; ?></td>
                <td><?php echo $this->Html->link(
                    'Detalles',
                    ['controller' => 'meseros', 'action' => 'ver',$mesero->id],
                    ['class' => 'btn btn-dark']
                    // En caso de querer que se habra en otra pagina se coloca , 'target' => '_blank' delado de la clase
                    ); ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>



