<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Price'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prices index large-9 medium-8 columns content">
    <h3><?= __('Prices') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('with_tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_featured') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prices as $price): ?>
            <tr>
                <td><?= $this->Number->format($price->id) ?></td>
                <td><?= h($price->title) ?></td>
                <td><?= $this->Number->format($price->value) ?></td>
                <td><?= h($price->unit) ?></td>
                <td><?= h($price->with_tax) ?></td>
                <td><?= $this->Number->format($price->tax_rate) ?></td>
                <td><?= h($price->is_featured) ?></td>
                <td><?= $price->has('user') ? $this->Html->link($price->user->name, ['controller' => 'Users', 'action' => 'view', $price->user->id]) : '' ?></td>
                <td><?= $this->Number->format($price->weight) ?></td>
                <td><?= h($price->status) ?></td>
                <td><?= h($price->created) ?></td>
                <td><?= h($price->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $price->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $price->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $price->id], ['confirm' => __('Are you sure you want to delete # {0}?', $price->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
