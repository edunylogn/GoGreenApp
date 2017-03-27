<div class="features form content" id="main-container">
    <div class="row">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 class="page-header"><?= __('Tours') ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <table cellpadding="0" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('company') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('duration') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('destination') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('available_date') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($tours as $tour): ?>
                        <tr>
                            <td><?= $this->Number->format($tour->id) ?></td>
                            <td><?= h($tour->name) ?></td>
                            <td><?= $this->Number->format($tour->price) ?></td>
                            <td><?= h($tour->company) ?></td>
                            <td><?= h($tour->duration) ?></td>
                            <td><?= h($tour->destination) ?></td>
                            <td><?= h($tour->available_date) ?></td>
                            <td class="actions">
                                <div class="btn-group">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $tour->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tour->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tour->id], ['class'=> 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $tour->id)]) ?>
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
</div>
