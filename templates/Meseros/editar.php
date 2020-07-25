<div class="container-fluid m-3">
	<h2 class="text-center">Editar mesero</h2>

	<div class="formulario_nuevo_mesero mr-3">
		<?php 
		$myTemplates = [
			'label' => '<label class="font-weight-bold mb-2"{{attrs}}>{{text}}:</label>',
			'error' => '<div class="error-message alert alert-danger mt-2">{{content}}</div>',
			'button' => '<button class="btn btn-dark mt-3 mx-auto" {{attrs}}>{{text}}</button>',
			'input' => '<input class="form-control mr-4" type="{{type}}" name="{{name}}"{{attrs}}/>',
		];
		$this->Form->setTemplates($myTemplates);

		echo $this->Form->create($mesero); 
		echo $this->Form->control('cedula');
		echo $this->Form->control('nombre');
		echo $this->Form->control('apellido');
		echo $this->Form->control('telefono');
		echo $this->Form->button(__('Editar mesero'));
		echo $this->Form->end();
		?>
	</div>
</div>

<style>
	.form-control:focus {
		border-color:  #343a40;
		box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.25);
	} 
</style>