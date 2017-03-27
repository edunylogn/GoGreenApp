<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h3><?= h($tag->title) ?></h3>
            <table class="table vertical-table">
                <tr>
                    <th scope="row"><?= __('Title') ?></th>
                    <td><?= h($tag->title) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tag->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($tag->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($tag->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
