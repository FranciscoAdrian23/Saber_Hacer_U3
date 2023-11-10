<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\U $u
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Us'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="us form content">
            <?= $this->Form->create($u) ?>
            <fieldset>
                <legend><?= __('Add U') ?></legend>
                <?php
                    echo $this->Form->control('nombre');
                    echo $this->Form->control('usuario');
                    echo $this->Form->control('password');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
