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
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= isset($pageTitle)? $pageTitle : $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('styles.css');?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('bootstrap-datetimepicker.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>
    <nav class="navbar navbar-default" style="margin-bottom: 0;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-nav" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><div class="brand-logo"></div></a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li><a target="_blank" href="http://localhotst:8081"><i class="fa fa-television fa-fw"></i></a></li>
                <li><a href="/api/users"><i class="fa fa-users fa-fw"></i></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true"><i class="fa fa-user fa-fw"></i><span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><?= $this->Html->link(__('Profile'), ['controller' => 'Users', 'action' => 'index']) ?></li>
                        <li role="separator" class="divider"></li>
                        <li><?= $this->Html->link(__('Logout'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <?= $this->Flash->render() ?>
    <?= $this->Flash->render('auth') ?>
    <div class="container-fluid clearfix" id="wrapper">
        <?= $this->element('Common/loading');?>
        <?php if($this->template != 'login'){
            echo $this->element('Common/side_nav');
        } ?>
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    

    <?= $this->Html->script([
        'libs/jquery.min.js',
        'libs/moment.js',
        'libs/bootstrap.min.js',
        'libs/bootstrap-datetimepicker.min.js',
        'libs/metisMenu.min.js',
        'common/loading_toggle.js',
        'common/global.js',
        'menu/sidebar.js',
    ]);?>
    <?= $this->fetch('scriptBottom') ?>
</body>
</html>
