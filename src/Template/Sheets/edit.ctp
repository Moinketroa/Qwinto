<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sheet->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sheet->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sheets'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Games'), ['controller' => 'Games', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Game'), ['controller' => 'Games', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sheets form large-9 medium-8 columns content">
    <?= $this->Form->create($sheet) ?>
    <fieldset>
        <legend><?= __('Edit Sheet') ?></legend>
        <?php
            echo $this->Form->input('cases');
            echo $this->Form->input('nb_croix');
            echo $this->Form->input('num_joueur');
            echo $this->Form->input('game_id', ['options' => $games]);
            echo $this->Form->input('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
