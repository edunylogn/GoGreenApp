<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Place Images'), ['controller' => 'PlaceImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place Image'), ['controller' => 'PlaceImages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images form large-9 medium-8 columns content">
    <?= $this->Form->create($image, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Add Image') ?></legend>
        <?php
            echo $this->Form->input('url');
            echo $this->Form->input('file_path', ['type' => 'hidden']);
            echo $this->Html->image('#', ['id' => 'blah' ,'alt' => 'your image', 'style' => 'display:none;']);
        ?>
        <label class="btn btn-default btn-file">
            Browse Image <?= $this->Form->input('image', ['label' => ['class' => 'hidden'], 'type' => 'file', 'style' => 'display:none;']); ?>
        </label>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->script('pages/imagesHelper.js', ['block' => 'scriptBottom']);?>