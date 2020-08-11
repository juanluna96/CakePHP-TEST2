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
            <?= $this->Html->link(__('Edit Mesa'), ['action' => 'edit', $mesa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Mesa'), ['action' => 'delete', $mesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Mesas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Mesa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="mesas view content">
            <h3><?= h($mesa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Mesero') ?></th>
                    <td><?= $mesa->has('mesero') ? $this->Html->link($mesa->mesero->id, ['controller' => 'Meseros', 'action' => 'view', $mesa->mesero->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Posicion') ?></th>
                    <td><?= h($mesa->posicion) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($mesa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= $this->Number->format($mesa->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Puestos') ?></th>
                    <td><?= $this->Number->format($mesa->puestos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($mesa->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($mesa->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
