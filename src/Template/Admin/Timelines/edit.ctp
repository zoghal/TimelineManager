<?php
/**
* @var \App\View\AppView $this
*/
?>
<nav id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Timelines'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timelines form  content-wrapper">
    <?= $this->Form->create($timeline,['type' => 'file','novalidate' => true]) ?>
    <fieldset>
        <legend><?= __('Master Information') ?></legend>
        <div class="form-row">


            <div  class="form-col" style="width: 300px;">
                <?= $this->Form->control('occur'); ?>
            </div>
            <div class="form-col full">
                <?= $this->Form->control('caption'); ?>
            </div>
            <div class="form-col" style="width: 70px;">
                <?= $this->Form->control('order'); ?>
            </div>
        </div>
    </fieldset>
    <fieldset>
        <legend><?= __('Document Information') ?></legend>
        <div class="form-row">
            <div class="form-col" >
                <?= $this->Form->control('private');?>
            </div>
            <div  class="form-col" >
                <?= $this->Form->control('published');?>
            </div>
            <div class="form-col full">
                <?= $this->Form->control('discussion_id', ['options' => $discussions, 'empty' => true]);?>
            </div>
            <div class="form-col full">
                <?= $this->Form->control('locate_id', ['options' => $locations, 'empty' => true]);?>
            </div>
            <div class="form-col full">
                <?= $this->Form->control('owner_id', ['options' => $owners, 'empty' => true]);?>
            </div>

        </div>
    </fieldset>



    <fieldset>
        <legend><?= __('Document Note') ?></legend>
        <?= $this->Form->control('note',['rows'=>2]);?>
    </fieldset>

    <fieldset class="ContentCheckBox">
        <legend><?= __('Document Note') ?></legend>
        <?= $this->Form->control('contacts._ids', ['options' => $contacts, 'multiple' => 'checkbox' ,'label' => false]); ?>
    </fieldset>

    <fieldset class="ContentCheckBox">
        <legend><?= __('Document Note') ?></legend>

        <?= $this->Form->control('tags._ids', ['options' => $tags,'multiple' => 'checkbox' ,'label' => false]);?>

    </fieldset>


    <fieldset>
        <legend><?= __('Document Sources') ?></legend>



        <div class="form-row">
            <?= $this->Form->control('source_url'); ?>
        </div>
        <div class="form-row">
            <?= $this->Form->control('source_freeze'); ?>
        </div>
        <div class="form-row">
            <?= $this->Form->control('source_screen'); ?>
        </div>
    </fieldset>






    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

