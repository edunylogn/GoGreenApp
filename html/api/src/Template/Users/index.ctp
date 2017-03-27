<div class="features form content" id="main-container">
    <div class="row">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <h1 class="page-header"><?= __('Users') ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <table cellpadding="0" cellspacing="0" class="table">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->role) ?></td>
                            <td class="actions">
                                <div class="btn-group">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class'=> 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
