<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="page-header"><?= __('Add Tour') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-container">
            <?= $this->Form->create($tour) ?>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('name');
                        echo $this->Form->input('description');
                        echo $this->Form->input('destination');
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('price');
                        echo $this->Form->input('company');
                        echo $this->Form->input('duration');
                        echo $this->Form->input('available_date', ['class' => 'datetimepicker-field']);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('address');
                        echo $this->Form->input('latitude');
                        echo $this->Form->input('longitude');
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('features._ids', ['label' => ['class' => 'custom-checkboxes'], 'multiple' => 'checkbox', 'options' => $features]);
                        ?>
                    </div>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
