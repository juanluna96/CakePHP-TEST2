<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mesa[]|\Cake\Collection\CollectionInterface $mesas
 */
?>
<div class="mesas index content">
    <?= $this->Html->link(__('New Mesa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Mesas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('puestos') ?></th>
                    <th><?= $this->Paginator->sort('posicion') ?></th>
                    <th><?= $this->Paginator->sort('mesero_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mesas as $mesa): ?>
                    <tr>
                        <td><?= $mesa->id ?></td>
                        <td><?= $mesa->codigo ?></td>
                        <td><?= $mesa->puestos ?></td>
                        <td><?= $mesa->posicion ?></td>
                        <td><?= $mesa->has('mesero') ? $this->Html->link($mesa->mesero->nombre . " " . $mesa->mesero->apellido, ['controller' => 'Meseros', 'action' => 'ver', $mesa->mesero->id]) : '' ?></td>
                        <td><?= h($mesa->created) ?></td>
                        <td><?= h($mesa->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $mesa->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mesa->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mesa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mesa->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
