<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produccion $produccion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Produccion'), ['action' => 'edit', $produccion->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Produccion'), ['action' => 'delete', $produccion->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $produccion->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Produccion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Produccion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="produccion view content">
            <h3><?= h($produccion->Serie) ?></h3>
            <table>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($produccion->Serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= h($produccion->Modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Area') ?></th>
                    <td><?= h($produccion->Area) ?></td>
                </tr>
                <tr>
                    <th><?= __('Linea') ?></th>
                    <td><?= h($produccion->Linea) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($produccion->Id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
