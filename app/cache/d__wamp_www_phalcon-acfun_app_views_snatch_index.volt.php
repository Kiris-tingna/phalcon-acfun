<p>优酷批量抓取方式</p>
<?php echo $this->tag->form(array('snatch/youku', 'method' => 'post')); ?>
<div class="row cl">
    <label class="form-label col-xs-2 col-md-1" for="cate">
        <span class="label label-success">所在节点</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        <?php echo $this->partial('partials/cate', array('name' => 'cate')); ?>
    </div>

    <label class="form-label col-xs-2 col-md-1" for="url">
        <span class="label label-success">优酷地址</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        <?php echo $this->tag->textField(array('url', 'class' => 'input-text')); ?>
    </div>
    <?php echo $this->tag->submitButton(array('抓取', 'class' => 'btn btn-primary-outline radius')); ?>
</div>
<?php echo $this->tag->endform(); ?>




