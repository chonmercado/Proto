<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Oficina $oficina
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Oficina'), ['action' => 'edit', $oficina->Id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Oficina'), ['action' => 'delete', $oficina->Id], ['confirm' => __('Are you sure you want to delete # {0}?', $oficina->Id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Oficina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Oficina'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="oficina view content">
            <h3><?= h($oficina->Serie) ?></h3>
            <table>
                <tr>
                    <th><?= __('Serie') ?></th>
                    <td><?= h($oficina->Serie) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modelo') ?></th>
                    <td><?= h($oficina->Modelo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Propietario') ?></th>
                    <td><?= h($oficina->Propietario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($oficina->Id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
