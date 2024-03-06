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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $oficina->Id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $oficina->Id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Oficina'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="oficina form content">
            <?= $this->Form->create($oficina) ?>
            <fieldset>
                <legend><?= __('Edit Oficina') ?></legend>
                <?php
                    echo $this->Form->control('Serie');
                    echo $this->Form->control('Modelo');
                    echo $this->Form->control('Propietario');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
