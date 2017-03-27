<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h3 class="page-header"><?= __('Add Room Category') ?></h3>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <?= $this->Form->create($roomCategory) ?>
            <fieldset>
                <?php
                echo $this->Form->input('title');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
