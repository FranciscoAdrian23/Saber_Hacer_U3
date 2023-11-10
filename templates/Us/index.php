<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\U> $us
 */
?>
<div class="us index content">
    <?= $this->Html->link(__('New U'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Us') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($us as $u): ?>
                <tr>
                    <td><?= $this->Number->format($u->id) ?></td>
                    <td><?= h($u->nombre) ?></td>
                    <td><?= h($u->usuario) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $u->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $u->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $u->id], ['confirm' => __('Are you sure you want to delete # {0}?', $u->id)]) ?>
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
