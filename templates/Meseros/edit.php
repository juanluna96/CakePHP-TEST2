<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mesero $mesero
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mesero->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mesero->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Meseros'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="meseros form content">
            <?= $this->Form->create($mesero) ?>
            <fieldset>
                <legend><?= __('Edit Mesero') ?></legend>
                <?php
                    echo $this->Form->control('cedula');
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('apellido');
                    echo $this->Form->control('telefono');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
