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
   <fieldset>
        <legend><?= __('Add Contact') ?></legend>      
        <div class="form-row" style="flex-wrap: wrap">
            <div class="form-col full" >
                <?= $this->Form->control('twitter1');?>
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('twitter2');?>
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('facebook1');?>
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('facebook2');?>
            </div>            
            <div class="form-col full" >
                <?= $this->Form->control('instagram1');?>
            </div>            
            <div class="form-col full" >
                <?= $this->Form->control('instagram1');?>
            </div>
            <div class="form-col full" >
                <?= $this->Form->control('behance');?>
            </div>              
            <div class="form-col full" >
                <?= $this->Form->control('website1');?>
            </div>              
            <div class="form-col full" >
                <?= $this->Form->control('website2');?>
            </div>              
            <div class="form-col full" >
               <?= $this->Form->control('github'); ?>
            </div>
        </div>  
    </fieldset>              
     
        

   <fieldset>
        <legend><?= __('Add Contact') ?></legend>  
         <div class="form-col full" >
        <?=  $this->Form->control('note'); ?>
        </div>
            <div class="form-col full" >
        <?= $this->Form->control('avatar',['type' => 'file']); ?>
        </div>
        
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
