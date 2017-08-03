<?php
/**
* @var \App\View\AppView $this
* @var \App\Model\Entity\Timeline[]|\Cake\Collection\CollectionInterface $timelines
*/
?>
<nav  id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">
            <?= __('Actions') ?>
        </li>
        <li>
            <?= $this->Html->link(__('New Timeline'), ['action' => 'add']) ?>
        </li>

    </ul>
</nav>
<div class="timelines index content-wrapper">
    <h3>
        <?= __('Timelines') ?>
    </h3>
    <div id="timeline">
        <?php
        foreach ($timelines as $timeline) : ?>
        <div class="timeline-box">
            <div class="time-row">
                <div class="time-cell  openClose">
                    <a class="open">+</a>
                    <a class="close">-</a>
                </div>
                <div class="time-cell isdate">
                    <span class="value" dir="ltr">
                        <?= $timeline->occur->format("Y/M/d") ?>
                    </span>
                </div>
                <div class="time-cell isdate">

                    <span class="value">
                        <?= $timeline->occur->i18nformat('yyyy٫MM٫dd', null, 'fa-IR@calendar=persian') ?>
                    </span>

                </div>

                <div class="time-cell isCaption" >
                    <span class="value">
                        <?= h($timeline->caption) ?>
                    </span>
                </div>
                <div class="time-cell isAction">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $timeline->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $timeline->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeline->id)]) ?>
                </div>
            </div>
            <div class="time-row">
                <div class="time-cell ">
                    <span class="title">نوع سند:</span>
                    <span class="value" >
                        <?= $timeline->has('discussion') ? $this->Html->link($timeline->discussion->label, ['controller' => 'Discussions', 'action' => 'view', $timeline->discussion->id]) : '' ?>
                    </span>
                </div>
                <div class="time-cell ">
                    <span class="title">جایگاه انتشار: </span>
                    <span class="value">
                        <?= $timeline->has('location') ? $this->Html->link($timeline->location->label, ['controller' => 'Discussions', 'action' => 'view', $timeline->discussion->id]) : '' ?>
                    </span>
                </div>
                <div class="time-cell ">
                    <span class="title">نوع حریم: </span>
                    <span class="value">
                        <a><?=  $timeline->location->private? 'خصوصی' : 'عمومی'  ?></a>
                    </span>
                </div>                
                <div class="time-cell ">
                    <span class="title"> ثبت شده در: </span>
                    <span class="value">
                        <a><?= $timeline->created->i18nformat('yyyy٫MM٫dd', null, 'fa-IR@calendar=persian') ?></a>
                    </span>
                </div>                
                <div class="time-cell ">
                    <span class="title"> بروز رسانی شده در: </span>
                    <span class="value">
                        <a><?= $timeline->created->i18nformat('yyyy٫MM٫dd', null, 'fa-IR@calendar=persian') ?></a>
                    </span>
                </div>                
            </div>
            <div class="time-row">
                <div class="time-cell ">
                    <span class="title"> توضیحات: </span>
                    <span class="value">
                        <a><?= $timeline->note ?></a>
                    </span>
                </div> 
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
        <p>
            <?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?>
        </p>
    </div>
</div>


<script>
    $(".openClose").on('click','a',function(){
            $(this).parents('.timeline-box').toggleClass('opened');
        });
</script>