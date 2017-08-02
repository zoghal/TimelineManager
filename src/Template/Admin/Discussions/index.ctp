<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Discussion[]|\Cake\Collection\CollectionInterface $discussions
  */
?>
<nav  id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Timelines'), ['controller' => 'Timelines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Timeline'), ['controller' => 'Timelines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discussions index content-wrapper">
    <h3><?= __('Discussions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('label') ?></th>
                <th scope="col"><?= $this->Paginator->sort('timeline_count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discussions as $discussion): ?>
            <tr>
                <td><?= $this->Number->format($discussion->id) ?></td>
                <td><?= h($discussion->label) ?></td>
                <td><?= $this->Number->format($discussion->timeline_count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $discussion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discussion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discussion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
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
