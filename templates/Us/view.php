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
            <?= $this->Html->link(__('Edit U'), ['action' => 'edit', $u->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete U'), ['action' => 'delete', $u->id], ['confirm' => __('Are you sure you want to delete # {0}?', $u->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Us'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New U'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="us view content">
            <h3><?= h($u->nombre) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($u->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($u->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($u->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
