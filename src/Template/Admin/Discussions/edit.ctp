<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $discussion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $discussion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Discussions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Timelines'), ['controller' => 'Timelines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Timeline'), ['controller' => 'Timelines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discussions form  content-wrapper">
    <?= $this->Form->create($discussion) ?>
    <fieldset>
        <legend><?= __('Edit Discussion') ?></legend>
        <?php
            echo $this->Form->control('label');
            echo $this->Form->control('timeline_count');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
