<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Tag $tag
  */
?>
<navid="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tag'), ['action' => 'edit', $tag->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tag'), ['action' => 'delete', $tag->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Timelines'), ['controller' => 'Timelines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timeline'), ['controller' => 'Timelines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tags view content-wrapper">
    <h3><?= h($tag->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($tag->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tag->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Timeline Counts') ?></th>
            <td><?= $this->Number->format($tag->timeline_counts) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Timelines') ?></h4>
        <?php if (!empty($tag->timelines)): ?>
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
            <?php foreach ($tag->timelines as $timelines): ?>
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
