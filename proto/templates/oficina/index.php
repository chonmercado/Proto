<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Oficina> $oficina
 */
?>
<div class="oficina index content">
    <?= $this->Html->link(__('New Oficina'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Oficina') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('Id') ?></th>
                    <th><?= $this->Paginator->sort('Serie') ?></th>
                    <th><?= $this->Paginator->sort('Modelo') ?></th>
                    <th><?= $this->Paginator->sort('Propietario') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($oficina as $oficina): ?>
                <tr>
                    <td><?= $this->Number->format($oficina->Id) ?></td>
                    <td><?= h($oficina->Serie) ?></td>
                    <td><?= h($oficina->Modelo) ?></td>
                    <td><?= h($oficina->Propietario) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $oficina->Id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $oficina->Id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $oficina->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $oficina->Id)]) ?>
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
