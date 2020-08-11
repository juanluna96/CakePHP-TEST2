<div class="container-fluid mt-2">
	<?php foreach ($mesero as $key => $meserito): ?>
		<h2 class="text-center">Detalle del Mesero@ <?php echo $meserito->nombre ?></h2>
		<p><strong>Documento de identidad: </strong><?php echo $meserito->cedula ?></p>
		<p><strong>Telefono: </strong><?php echo $meserito->telefono ?></p>
		<p><strong>Creado: </strong><?php echo $meserito->created ?></p>
		<?php if (!empty($meserito->mesas)): ?>
			<h3>Encargado de las mesas</h3>
			<?php foreach ($meserito->mesas as $key => $mesas): ?>
				<hr>
				<p><strong>Numero: </strong><?php echo $mesas->codigo ?></p>
				<p><strong>Numero de puestos: </strong><?php echo $mesas->puestos ?></p>
				<p><strong>Ubicacion: </strong><?php echo $mesas->posicion ?></p>
			<?php endforeach ?>
			<hr>
		<?php endif ?>
	<?php endforeach ?>
	<?php echo $this->Html->link(
		'Volver a la lista de meseros',
		['controller' => 'meseros', 'action' => 'index'],
		['class' => 'btn btn-dark']
        // En caso de querer que se habra en otra pagina se coloca , 'target' => '_blank' delado de la clase
	); ?>
</div>
