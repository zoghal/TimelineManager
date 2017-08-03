<?php
/**
* @var \App\View\AppView $this
*/
?>
<nav id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index'],['class'=> '.button']) ?></li>
    </ul>
</nav>
<div class="contacts form  content-wrapper">
    <?= $this->Form->create($contact,['type' => 'file','novalidate' => true]) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <div class="form-row">
            <div class="form-col full" >
                <?= $this->Form->control('name');?>
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('family');?>
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('label');?>
            </div>
        </div>
    </fieldset>        
  

    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
