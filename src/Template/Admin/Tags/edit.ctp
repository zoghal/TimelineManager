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
                ['action' => 'delete', $tag->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Timelines'), ['controller' => 'Timelines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Timeline'), ['controller' => 'Timelines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tags form  content-wrapper">
    <?= $this->Form->create($tag) ?>
    <fieldset>
        <legend><?= __('Edit Tag') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('timeline_counts');
            echo $this->Form->control('timelines._ids', ['options' => $timelines]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
