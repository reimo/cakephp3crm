<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Suppliers'), ['controller' => 'Suppliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Supplier'), ['controller' => 'Suppliers', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="products index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('name') ?></th>
            <th><?= $this->Paginator->sort('category_id') ?></th>
            <th><?= $this->Paginator->sort('sku') ?></th>
            <th><?= $this->Paginator->sort('supplier_id') ?></th>
            <th><?= $this->Paginator->sort('quantity') ?></th>
            <th><?= $this->Paginator->sort('price') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Number->format($product->id) ?></td>
            <td><?= h($product->name) ?></td>
            <td>
                <?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?>
            </td>
            <td><?= h($product->sku) ?></td>
            <td>
                <?= $product->has('supplier') ? $this->Html->link($product->supplier->name, ['controller' => 'Suppliers', 'action' => 'view', $product->supplier->id]) : '' ?>
            </td>
            <td><?= $this->Number->format($product->quantity) ?></td>
            <td><?= $this->Number->format($product->price) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
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
