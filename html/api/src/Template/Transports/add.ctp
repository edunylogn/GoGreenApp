<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="page-header"><?= __('Add Transport') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 form-container">
            <?= $this->Form->create($transport) ?>
            <fieldset>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('name');
                        echo $this->Form->input('description');
                        ?>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('price_day');
                        echo $this->Form->input('supplier');
                        echo $this->Form->input('available_date', ['class' => 'datetimepicker-field']);
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <?php
                        echo $this->Form->input('brand');
                        echo $this->Form->input('type');
                        echo $this->Form->input('seats');
                        echo $this->Form->input('doors');
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