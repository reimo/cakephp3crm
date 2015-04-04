<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Tax Rule'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="taxRules index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('percent') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($taxRules as $taxRule): ?>
        <tr>
            <td><?= $this->Number->format($taxRule->id) ?></td>
            <td><?= h($taxRule->name) ?></td>
            <td><?= $this->Number->format($taxRule->percent) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $taxRule->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $taxRule->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $taxRule->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taxRule->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
