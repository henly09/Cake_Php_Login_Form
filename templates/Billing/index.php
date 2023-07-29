<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Billing> $billing
 */
?>


<!-- Table Container (Fixed Position) -->
<div class="table-container">
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
            <?php if (!$billing): ?>
                <tbody>
                    <?php foreach ($billing as $billingRecord): ?>
                        <tr>
                            <td><?= $this->Number->format($billingRecord->id) ?></td>
                            <td><?= h($billingRecord->account) ?></td>
                            <td><?= h($billingRecord->bill_name) ?></td>
                            <td><?= h($billingRecord->issued) ?></td>
                            <td><?= h($billingRecord->due_date) ?></td>
                            <td><?= h($billingRecord->description) ?></td>
                            <td><?= $this->Number->format($billingRecord->total) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $billingRecord->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $billingRecord->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $billingRecord->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billingRecord->id)]) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            <?php else: ?>
                    <tbody>
                        <tr class="centered-row">
                            <td colspan="8">No billing records found.</td>
                        </tr>
                    </tbody>
            <?php endif; ?>

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

<!-- Additional CSS -->
<style>
    .table-container {
        position: fixed;
        top: 100px; /* Adjust the top distance as needed to align the table with your navigation height */
        right: 3%;
        width: 75%; /* Set the width of the table container */
        max-height: calc(100vh - 150px); /* Set the max-height to fit the table within the viewport */
        overflow-y: auto; /* Add vertical scroll if necessary */
    }
    .centered-row td {
        text-align: center;
        padding: 250px 0; /* Adjust the padding value as needed */
    }
</style>