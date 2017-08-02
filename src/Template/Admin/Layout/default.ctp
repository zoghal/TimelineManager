<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html dir="rtl">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('admin.css') ?>
        <?= $this->Html->script('/js/jquery-3.2.1.min.js'); ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
                <div class="menu-area">
            <?= $this->Html->link(__('Contacts'), ['controller' => 'Contacts', 'action' => 'index']) ?>
            <?= $this->Html->link(__('Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?>
            <?= $this->Html->link(__('Locations'), ['controller' => 'Locations', 'action' => 'index']) ?>
            <?= $this->Html->link(__('Tags'), ['controller' => 'Tags', 'action' => 'index']) ?>
            <?= $this->Html->link(__('Timelines'), ['controller' => 'Timelines', 'action' => 'index']) ?>
        </div>
        <ul class="title-area ">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>

    </nav>
    <?= $this->Flash->render() ?>
    <div class="container ">
  
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
