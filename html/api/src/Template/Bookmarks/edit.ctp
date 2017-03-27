<div class="bookmarks form content" id="main-container">
    <div class="row">
        <div class="col-xs-12">
            <?= $this->Form->create($bookmark) ?>
            <fieldset>
                <legend><?= __('Edit Bookmark') ?></legend>
                <?php
                    echo $this->Form->input('title');
                    echo $this->Form->input('description');
                    echo $this->Form->input('url');
                    #echo $this->Form->input('tags._ids', ['options' => $tags]);
                    echo $this->Form->input('tag_string', ['type' => 'text']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
