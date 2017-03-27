<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $image->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Place Images'), ['controller' => 'PlaceImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place Image'), ['controller' => 'PlaceImages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="images form large-9 medium-8 columns content">
    <?= $this->Form->create($image, ['type' => 'file']) ?>
    <fieldset>
        <legend><?= __('Edit Image') ?></legend>
        <?php
        echo $this->Form->input('url');
        echo $this->Html->image('../files/images_uploaded/' . $image->image);
        echo $this->Form->input('image', ['type' => 'file']);
        echo $this->Form->input('file_path', ['type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
