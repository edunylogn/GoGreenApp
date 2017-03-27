<div class="cell-images-container" data-place-id="test">
    <div class="alert-container"></div>
    <div class="row">
        <div class="col-md-12">
            <h5>
                Add an image for the gallery that the user will see &nbsp;&nbsp;
                <label class="btn btn-info btn-sm">
                    Browse <?= $this->Form->input('new-image', ['label' => ['class' => 'hidden'], 'type' => 'file', 'style' => 'display:none;']); ?>
                </label>
            </h5>
        </div>
        <hr>
    </div>
    <div class="row image-preview-container" style="display: none;">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Check your selected image:
                </div>
                <div class="panel-body text-center">
                    <?php echo $this->Html->image('default-thumbnail.jpg', ['id' => 'new-image-preview' ,'alt' => 'your image']); ?>
                    <p>
                        <div class="btn-group img-preview-options" role="group">
                            <a href="#" class="btn-img-cancel btn btn-warning btn-sm" role="button">Cancel</a>
                            <a href="#" class="btn-img-add btn btn-default btn-sm" role="button">Add Image</a>
                        </div>
                    </p>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <div class="row images-updloaded-container">
        <div class="col-md-12">
            <h4>Image Gallery</h4>
        </div>
        <?php foreach ($images as $image): ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="panel panel-success">
                    <div class="panel-body">
                        <div class="text-center">
                            <div class="img-item-content">
                                <img src="<?= isset($image->image)? h(SUBFOLDER . DS . $image->file_path . 'thumb-' . $image->image): '#' ?>" alt="...">
                            </div>
                            <p>
                                <div class="btn-group img-preview-options" role="group">
                                    <a href="#" class="btn-img-remove btn btn-danger btn-sm" data-place-id="test" data-image-id="<?= $image->id ?>" role="button">Remove</a>
                                </div>
                                <input type="hidden" name="images[_ids][]" value="<?= $image->id ?>">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

