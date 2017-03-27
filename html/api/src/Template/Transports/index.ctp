<div class="features form content" id="main-container">
    <div class="row">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 class="page-header"><?= __('Transport') ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <table cellpadding="0" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('price_day') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('supplier') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('brand') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('seats') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('doors') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('available_date') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transports as $transport): ?>
                        <tr>
                            <td><?= $this->Number->format($transport->id) ?></td>
                            <td><?= h($transport->name) ?></td>
                            <td><?= $this->Number->format($transport->price_day) ?></td>
                            <td><?= h($transport->supplier) ?></td>
                            <td><?= h($transport->brand) ?></td>
                            <td><?= h($transport->type) ?></td>
                            <td><?= $this->Number->format($transport->seats) ?></td>
                            <td><?= $this->Number->format($transport->doors) ?></td>
                            <td><?= h($transport->available_date) ?></td>
                            <td class="actions">
                                <div class="btn-group">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $transport->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transport->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transport->id], ['class'=> 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $transport->id)]) ?>
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
