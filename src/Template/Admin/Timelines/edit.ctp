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
                ['action' => 'delete', $timeline->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $timeline->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Timelines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timelines form  content-wrapper">
    <?= $this->Form->create($timeline,['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Timeline') ?></legend>
        <?php
            echo $this->Form->control('caption');
            echo $this->Form->control('occur');
            echo $this->Form->control('private');
            echo $this->Form->control('order');
            echo $this->Form->control('discussion_id', ['options' => $discussions, 'empty' => true]);
            echo $this->Form->control('locate_id', ['options' => $locations, 'empty' => true]);
            echo $this->Form->control('note');
            echo $this->Form->control('published');
            echo $this->Form->control('contacts._ids', ['options' => $contacts]);
            echo $this->Form->control('tags._ids', ['options' => $tags]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
