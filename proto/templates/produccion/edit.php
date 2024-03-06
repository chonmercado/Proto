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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produccion->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produccion->Id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Produccion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="produccion form content">
            <?= $this->Form->create($produccion) ?>
            <fieldset>
                <legend><?= __('Edit Produccion') ?></legend>
                <?php
                    echo $this->Form->control('Serie');
                    echo $this->Form->control('Modelo');
                    echo $this->Form->control('Area');
                    echo $this->Form->control('Linea');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
