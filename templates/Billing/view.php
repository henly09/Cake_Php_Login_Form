<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billing $billing
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Billing'), ['action' => 'edit', $billing->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Billing'), ['action' => 'delete', $billing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billing->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Billing'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Billing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="billing view content">
            <h3><?= h($billing->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Account') ?></th>
                    <td><?= h($billing->account) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bill Name') ?></th>
                    <td><?= h($billing->bill_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($billing->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($billing->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Total') ?></th>
                    <td><?= $this->Number->format($billing->total) ?></td>
                </tr>
                <tr>
                    <th><?= __('Issued') ?></th>
                    <td><?= h($billing->issued) ?></td>
                </tr>
                <tr>
                    <th><?= __('Due Date') ?></th>
                    <td><?= h($billing->due_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
