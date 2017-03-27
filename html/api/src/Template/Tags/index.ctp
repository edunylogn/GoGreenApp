<div class="features form content" id="main-container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h1 class="page-header"><?= __('Tags') ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <table cellpadding="0" cellspacing="0" class="table">r
                <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tags as $tag): ?>
                    <tr>
                        <td><?= $this->Number->format($tag->id) ?></td>
                        <td><?= h($tag->title) ?></td>
                        <td class="actions">
                            <div class="btn-group">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $tag->id], ['class'=> 'btn btn-sm btn-info']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tag->id], ['class'=> 'btn btn-sm btn-default']) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tag->id], ['class'=> 'btn btn-sm btn-danger', 'confirm' => __('Are you sure you want to delete # {0}?', $tag->id)]) ?>
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
