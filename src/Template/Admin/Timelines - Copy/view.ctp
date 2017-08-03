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
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Locations'), ['controller' => 'Locations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Location'), ['controller' => 'Locations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['controller' => 'Contacts', 'action' => 'add']) ?> </li>
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
            <th scope="row"><?= __('Discussion') ?></th>
            <td><?= $timeline->has('discussion') ? $this->Html->link($timeline->discussion->id, ['controller' => 'Discussions', 'action' => 'view', $timeline->discussion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= $timeline->has('location') ? $this->Html->link($timeline->location->id, ['controller' => 'Locations', 'action' => 'view', $timeline->location->id]) : '' ?></td>
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
        <h4><?= __('Related Contacts') ?></h4>
        <?php if (!empty($timeline->contacts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Family') ?></th>
                <th scope="col"><?= __('Label') ?></th>
                <th scope="col"><?= __('Twitter1') ?></th>
                <th scope="col"><?= __('Twitter2') ?></th>
                <th scope="col"><?= __('Facebook') ?></th>
                <th scope="col"><?= __('Instagram') ?></th>
                <th scope="col"><?= __('Github') ?></th>
                <th scope="col"><?= __('Note') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($timeline->contacts as $contacts): ?>
            <tr>
                <td><?= h($contacts->id) ?></td>
                <td><?= h($contacts->name) ?></td>
                <td><?= h($contacts->family) ?></td>
                <td><?= h($contacts->label) ?></td>
                <td><?= h($contacts->twitter1) ?></td>
                <td><?= h($contacts->twitter2) ?></td>
                <td><?= h($contacts->facebook) ?></td>
                <td><?= h($contacts->instagram) ?></td>
                <td><?= h($contacts->github) ?></td>
                <td><?= h($contacts->note) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacts', 'action' => 'view', $contacts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacts', 'action' => 'edit', $contacts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacts', 'action' => 'delete', $contacts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacts->id)]) ?>
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
