<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Discussion $discussion
  */
?>
<navid="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Discussion'), ['action' => 'edit', $discussion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Discussion'), ['action' => 'delete', $discussion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Discussions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Timelines'), ['controller' => 'Timelines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timeline'), ['controller' => 'Timelines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="discussions view content-wrapper">
    <h3><?= h($discussion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Label') ?></th>
            <td><?= h($discussion->label) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($discussion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timeline Count') ?></th>
            <td><?= $this->Number->format($discussion->timeline_count) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Timelines') ?></h4>
        <?php if (!empty($discussion->timelines)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Caption') ?></th>
                <th scope="col"><?= __('Occur') ?></th>
                <th scope="col"><?= __('Private') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Order') ?></th>
                <th scope="col"><?= __('From Id') ?></th>
                <th scope="col"><?= __('To Id') ?></th>
                <th scope="col"><?= __('Discussion Id') ?></th>
                <th scope="col"><?= __('Locate Id') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Published') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($discussion->timelines as $timelines): ?>
            <tr>
                <td><?= h($timelines->id) ?></td>
                <td><?= h($timelines->caption) ?></td>
                <td><?= h($timelines->occur) ?></td>
                <td><?= h($timelines->private) ?></td>
                <td><?= h($timelines->parent_id) ?></td>
                <td><?= h($timelines->order) ?></td>
                <td><?= h($timelines->from_id) ?></td>
                <td><?= h($timelines->to_id) ?></td>
                <td><?= h($timelines->discussion_id) ?></td>
                <td><?= h($timelines->locate_id) ?></td>
                <td><?= h($timelines->note) ?></td>
                <td><?= h($timelines->created) ?></td>
                <td><?= h($timelines->modified) ?></td>
                <td><?= h($timelines->published) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Timelines', 'action' => 'view', $timelines->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Timelines', 'action' => 'edit', $timelines->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Timelines', 'action' => 'delete', $timelines->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timelines->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
