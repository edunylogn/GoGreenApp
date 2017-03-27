<div class="places-view form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h3><?= h($transport->name) ?></h3>
            <table class="vertical-table table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($transport->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Supplier') ?></th>
                    <td><?= h($transport->supplier) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Brand') ?></th>
                    <td><?= h($transport->brand) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Type') ?></th>
                    <td><?= h($transport->type) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($transport->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Price Day') ?></th>
                    <td><?= $this->Number->format($transport->price_day) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Seats') ?></th>
                    <td><?= $this->Number->format($transport->seats) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Doors') ?></th>
                    <td><?= $this->Number->format($transport->doors) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Available Date') ?></th>
                    <td><?= h($transport->available_date) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($transport->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($transport->modified) ?></td>
                </tr>
            </table>
            <div class="row">
                <div class="col-sm-12">
                    <h4><?= __('Description') ?></h4>
                    <?= $this->Text->autoParagraph(h($transport->description)); ?>
                </div>
            </div>
        </div>
    </div>
</div>
