<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mesa $mesa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Mesas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mesas form content">
            <?php //debug($meseros); exit; ?>
            <?= $this->Form->create($mesa) ?>
            <fieldset>
                <legend><?= __('Add Mesa') ?></legend>
                <?php
                echo $this->Form->control('mesero_id', ['options' => $meseros]);
                echo $this->Form->control('codigo');
                echo $this->Form->control('puestos');
                echo $this->Form->control('posicion');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
