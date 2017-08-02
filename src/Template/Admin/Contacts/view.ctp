<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Contact $contact
  */
?>
<navid="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view content-wrapper">
    <h3><?= h($contact->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contact->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family') ?></th>
            <td><?= h($contact->family) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Label') ?></th>
            <td><?= h($contact->label) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter1') ?></th>
            <td><?= h($contact->twitter1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter2') ?></th>
            <td><?= h($contact->twitter2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($contact->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instagram') ?></th>
            <td><?= h($contact->instagram) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Github') ?></th>
            <td><?= h($contact->github) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Note') ?></th>
            <td><?= h($contact->note) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
    </table>
</div>
