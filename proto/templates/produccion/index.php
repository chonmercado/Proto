<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Produccion> $produccion
 */
?>
<div class="produccion index content">
    <?= $this->Html->link(__('New Produccion'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Produccion') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Serie') ?></th>
                    <th><?= $this->Paginator->sort('Modelo') ?></th>
                    <th><?= $this->Paginator->sort('Area') ?></th>
                    <th><?= $this->Paginator->sort('Linea') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($produccion as $produccion): ?>
                <tr>
                    <td><?= $this->Number->format($produccion->Id) ?></td>
                    <td><?= h($produccion->Serie) ?></td>
                    <td><?= h($produccion->Modelo) ?></td>
                    <td><?= h($produccion->Area) ?></td>
                    <td><?= h($produccion->Linea) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $produccion->Id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $produccion->Id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $produccion->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $produccion->Id)]) ?>
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
