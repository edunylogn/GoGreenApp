<div class="places-view form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h3><?= h($tour->name) ?></h3>
            <table class="vertical-table table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($tour->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Company') ?></th>
                    <td><?= h($tour->company) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Duration') ?></th>
                    <td><?= h($tour->duration) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Destination') ?></th>
                    <td><?= h($tour->destination) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Address') ?></th>
                    <td><?= h($tour->address) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Latitude') ?></th>
                    <td><?= h($tour->latitude) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Longitude') ?></th>
                    <td><?= h($tour->longitude) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tour->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Price') ?></th>
                    <td><?= $this->Number->format($tour->price) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Available Date') ?></th>
                    <td><?= h($tour->available_date) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($tour->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($tour->modified) ?></td>
                </tr>
            </table>
            <div class="row">
                <div class="col-sm-12">
                    <h4><?= __('Description') ?></h4>
                    <?= $this->Text->autoParagraph(h($tour->description)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
