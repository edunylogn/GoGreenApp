<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">
            <h3><?= h($feature->name) ?></h3>
            <table class="table vertical-table">
                <tr>
                    <th scope="row"><?= __('Name') ?></th>
                    <td><?= h($feature->name) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Feature Category') ?></th>
                    <td><?= h($categories[$feature->feature_category]) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Id') ?></th>
                    <td><?= $this->Number->format($feature->id) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Created') ?></th>
                    <td><?= h($feature->created) ?></td>
                </tr>
                <tr>
                    <th scope="row"><?= __('Modified') ?></th>
                    <td><?= h($feature->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Place Features') ?></h4>
                <?php if (!empty($feature->place_features)): ?>
                <table cellpadding="0" cellspacing="0" class="table">
                    <tr>
                        <th scope="col"><?= __('Id') ?></th>
                        <th scope="col"><?= __('Place Id') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                    <?php foreach ($feature->place_features as $placeFeatures): ?>
                    <tr>
                        <td><?= h($placeFeatures->id) ?></td>
                        <td><?= h($placeFeatures->place_id) ?></td>
                        <td class="actions">
                            <div class="btn-group">
                                <?= $this->Html->link(__('View'), ['controller' => 'PlaceFeatures', 'action' => 'view', $placeFeatures->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'PlaceFeatures', 'action' => 'edit', $placeFeatures->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'PlaceFeatures', 'action' => 'delete', $placeFeatures->id], ['class'=> 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $placeFeatures->id)]) ?>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
