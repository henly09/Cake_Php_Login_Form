<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Billing> $billing
 */
?>
<div class="billing index content">
    <?= $this->Html->link(__('New Billing'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Billing') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('account') ?></th>
                    <th><?= $this->Paginator->sort('bill_name') ?></th>
                    <th><?= $this->Paginator->sort('issued') ?></th>
                    <th><?= $this->Paginator->sort('due_date') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('total') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($billing as $billing): ?>
                <tr>
                    <td><?= $this->Number->format($billing->id) ?></td>
                    <td><?= h($billing->account) ?></td>
                    <td><?= h($billing->bill_name) ?></td>
                    <td><?= h($billing->issued) ?></td>
                    <td><?= h($billing->due_date) ?></td>
                    <td><?= h($billing->description) ?></td>
                    <td><?= $this->Number->format($billing->total) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $billing->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billing->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billing->id)]) ?>
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
