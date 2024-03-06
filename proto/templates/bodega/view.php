<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bodega $bodega
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Bodega'), ['action' => 'edit', $bodega->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bodega'), ['action' => 'delete', $bodega->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $bodega->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bodega'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bodega'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bodega view content">
            <h3><?= h($bodega->Serie) ?></h3>
            <table>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($bodega->Serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= h($bodega->Modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estado') ?></th>
                    <td><?= h($bodega->Estado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($bodega->Id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
