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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mesa->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Mesas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mesas form content">
            <?= $this->Form->create($mesa) ?>
            <fieldset>
                <legend><?= __('Edit Mesa') ?></legend>
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
