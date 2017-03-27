<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h3><?= h($roomCategory->title) ?></h3>
            <table class="vertical-table">
                <tr>
                    <th scope="row"><?= __('Title') ?></th>
                    <td><?= h($roomCategory->title) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($roomCategory->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($roomCategory->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($roomCategory->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
