<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="page-header"><?= __('Edit User') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-container">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <?php
                echo $this->Form->input('email');
                echo $this->Form->input('password');
                echo $this->Form->input('role');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>