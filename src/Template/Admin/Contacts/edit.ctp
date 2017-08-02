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
                ['action' => 'delete', $contact->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id),'class' => 'button']
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index'],['class' => 'button']) ?></li>
    </ul>
</nav>
<div class="contacts form  content-wrapper">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Edit Contact') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('family');
            echo $this->Form->control('label');
            echo $this->Form->control('twitter1');
            echo $this->Form->control('twitter2');
            echo $this->Form->control('facebook');
            echo $this->Form->control('instagram');
            echo $this->Form->control('github');
            echo $this->Form->control('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
