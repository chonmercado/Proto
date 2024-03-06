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
            <?= $this->Html->link(__('List Bodega'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="bodega form content">
            <?= $this->Form->create($bodega) ?>
            <fieldset>
                <legend><?= __('Add Bodega') ?></legend>
                <?php
                    echo $this->Form->control('Serie');
                    echo $this->Form->control('Modelo');
                    echo $this->Form->control('Estado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
