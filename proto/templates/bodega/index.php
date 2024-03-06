<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Bodega> $bodega
 */
?>
<div class="bodega index content">
    <?= $this->Html->link(__('New Bodega'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Bodega') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Serie') ?></th>
                    <th><?= $this->Paginator->sort('Modelo') ?></th>
                    <th><?= $this->Paginator->sort('Estado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bodega as $bodega): ?>
                <tr>
                    <td><?= $this->Number->format($bodega->Id) ?></td>
                    <td><?= h($bodega->Serie) ?></td>
                    <td><?= h($bodega->Modelo) ?></td>
                    <td><?= h($bodega->Estado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $bodega->Id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bodega->Id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bodega->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $bodega->Id)]) ?>
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
