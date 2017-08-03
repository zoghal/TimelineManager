<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Contact[]|\Cake\Collection\CollectionInterface $contacts
*/
?>
<nav  id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacts index content-wrapper">
    <h3><?= __('Contacts') ?></h3>
    <div class="contacts-lists">

        <?php
        foreach ($contacts as $contact): ?>
        <div class="contact-profile">
        	<div class="body">
            <div class="avatar">
                <?= $this->Html->image( '/files/Contacts/'.$contact->id.'.jpg') ?>
            </div>
            <div class="info">
                <div><?= h($contact->full_name) ?></div>

                <a><?= h($contact->label) ?></a>
            </div>
            </div>
            <div class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
            </div>

        </div>
        <?php endforeach; ?>
    </div>

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
