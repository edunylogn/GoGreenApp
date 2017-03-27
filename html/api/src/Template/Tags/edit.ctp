<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="page-header"><?= __('Edit Tag') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 form-container">
            <?= $this->Form->create($tag) ?>
            <fieldset>
                <legend><?= __('Add Tag') ?></legend>
                <?php
                echo $this->Form->input('title');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
