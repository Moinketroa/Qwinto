<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Sheet'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sheets index large-9 medium-8 columns content">
    <h3><?= __('Sheets') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('cases') ?></th>
                <th><?= $this->Paginator->sort('num_joueur') ?></th>
                <th><?= $this->Paginator->sort('game_id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sheets as $sheet): ?>
            <tr>
                <td><?= $this->Number->format($sheet->id) ?></td>
                <td><?= h($sheet->cases) ?></td>
                <td><?= $this->Number->format($sheet->num_joueur) ?></td>
                <td><?= $sheet->has('game') ? $this->Html->link($sheet->game->id, ['controller' => 'Games', 'action' => 'view', $sheet->game->id]) : '' ?></td>
                <td><?= $sheet->has('user') ? $this->Html->link($sheet->user->id, ['controller' => 'Users', 'action' => 'view', $sheet->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $sheet->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $sheet->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $sheet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sheet->id)]) ?>
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
