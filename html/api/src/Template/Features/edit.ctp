<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1 class="page-header"><?= __('Edit Feature') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4 form-container">
            <?= $this->Form->create($feature) ?>
            <fieldset>
                <?php
                echo $this->Form->input('name');
                echo $this->Form->input('feature_category', ['options' => $categories, 'empty' => '(choose one)']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'), ['class'=> 'btn-success']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
