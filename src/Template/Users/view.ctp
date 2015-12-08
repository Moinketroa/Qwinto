<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sheets'), ['controller' => 'Sheets', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sheet'), ['controller' => 'Sheets', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Sheets') ?></h4>
        <?php if (!empty($user->sheets)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cases') ?></th>
                <th><?= __('Nb Croix') ?></th>
                <th><?= __('Num Joueur') ?></th>
                <th><?= __('Game Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->sheets as $sheets): ?>
            <tr>
                <td><?= h($sheets->id) ?></td>
                <td><?= h($sheets->cases) ?></td>
                <td><?= h($sheets->nb_croix) ?></td>
                <td><?= h($sheets->num_joueur) ?></td>
                <td><?= h($sheets->game_id) ?></td>
                <td><?= h($sheets->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Sheets', 'action' => 'view', $sheets->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Sheets', 'action' => 'edit', $sheets->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Sheets', 'action' => 'delete', $sheets->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sheets->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
