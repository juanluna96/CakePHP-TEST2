<h2>Crear mesero</h2>

<?php 

echo $this->Form->create($mesero); 

echo $this->Form->control('cedula');
echo $this->Form->control('nombre');
echo $this->Form->control('apellido');
echo $this->Form->control('telefono');
echo $this->Form->button(__('Crear nuevo mesero'));
echo $this->Form->end();
?>