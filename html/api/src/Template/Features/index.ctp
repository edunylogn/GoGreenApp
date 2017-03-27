<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="page-header"><?= __('Features') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <table cellpadding="0" cellspacing="0" class="table">
                <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('feature_category') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($features as $feature): ?>
                    <tr>
                        <td><?= $this->Number->format($feature->id) ?></td>
                        <td><?= h($feature->name) ?></td>
                        <td><?= h($categories[$feature->feature_category]) ?></td>
                        <td class="actions">
                            <div class="btn-group">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $feature->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feature->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feature->id], ['class'=> 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $feature->id)]) ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->first('<< ' . __('first')) ?>
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                    <?= $this->Paginator->last(__('last') . ' >>') ?>
                </ul>
                <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
            </div>
        </div>
    </div>
</div>
