<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Timeline $timeline
  */
?>
<navid="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Timeline'), ['action' => 'edit', $timeline->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Timeline'), ['action' => 'delete', $timeline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeline->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Timelines'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Timeline'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Relationships'), ['controller' => 'TimelinesRelationships', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relationship'), ['controller' => 'TimelinesRelationships', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timelines view content-wrapper">
    <h3><?= h($timeline->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Caption') ?></th>
            <td><?= h($timeline->caption) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= $timeline->has('contact') ? $this->Html->link($timeline->contact->fullName, ['controller' => 'Contacts', 'action' => 'view', $timeline->contact->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discussion') ?></th>
            <td><?= $timeline->has('discussion') ? $this->Html->link($timeline->discussion->label, ['controller' => 'Discussions', 'action' => 'view', $timeline->discussion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $timeline->has('location') ? $this->Html->link($timeline->location->label, ['controller' => 'Locations', 'action' => 'view', $timeline->location->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Url') ?></th>
            <td><?= h($timeline->source_url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Freeze') ?></th>
            <td><?= h($timeline->source_freeze) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Source Screen') ?></th>
            <td><?= h($timeline->source_screen) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($timeline->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Order') ?></th>
            <td><?= $this->Number->format($timeline->order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occur') ?></th>
            <td><?= h($timeline->occur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($timeline->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($timeline->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Private') ?></th>
            <td><?= $timeline->private ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Published') ?></th>
            <td><?= $timeline->published ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($timeline->note)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Timelines Relationships') ?></h4>
        <?php if (!empty($timeline->relationships)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Timeline Id') ?></th>
                <th scope="col"><?= __('Contact Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($timeline->relationships as $relationships): ?>
            <tr>
                <td><?= h($relationships->id) ?></td>
                <td><?= h($relationships->timeline_id) ?></td>
                <td><?= h($relationships->contact_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TimelinesRelationships', 'action' => 'view', $relationships->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TimelinesRelationships', 'action' => 'edit', $relationships->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TimelinesRelationships', 'action' => 'delete', $relationships->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relationships->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Tags') ?></h4>
        <?php if (!empty($timeline->tags)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Timeline Counts') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($timeline->tags as $tags): ?>
            <tr>
                <td><?= h($tags->id) ?></td>
                <td><?= h($tags->title) ?></td>
                <td><?= h($tags->timeline_counts) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Tags', 'action' => 'view', $tags->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Tags', 'action' => 'edit', $tags->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tags', 'action' => 'delete', $tags->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tags->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
