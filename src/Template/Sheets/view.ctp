<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sheet'), ['action' => 'edit', $sheet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sheet'), ['action' => 'delete', $sheet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sheet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sheets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sheet'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sheets view large-9 medium-8 columns content">
    <h3><?= h($sheet->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cases') ?></th>
            <td><?= h($sheet->cases) ?></td>
        </tr>
        <tr>
            <th><?= __('Game') ?></th>
            <td><?= $sheet->has('game') ? $this->Html->link($sheet->game->id, ['controller' => 'Games', 'action' => 'view', $sheet->game->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $sheet->has('user') ? $this->Html->link($sheet->user->id, ['controller' => 'Users', 'action' => 'view', $sheet->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($sheet->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Num Joueur') ?></th>
            <td><?= $this->Number->format($sheet->num_joueur) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Nb Croix') ?></h4>
        <?= $this->Text->autoParagraph(h($sheet->nb_croix)); ?>
    </div>
</div>
