<div class="bookmarks form content" id="main-container">
    <div class="row">
        <div class="col-xs-12">
            <h3><?= __('Bookmarks') ?></h3>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookmarks as $bookmark): ?>
                    <tr>
                        <td><?= $this->Number->format($bookmark->id) ?></td>
                        <td><?= h($bookmark->title) ?></td>
                        <td><?= h($bookmark->created) ?></td>
                        <td><?= h($bookmark->modified) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $bookmark->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bookmark->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bookmark->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bookmark->id)]) ?>
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
