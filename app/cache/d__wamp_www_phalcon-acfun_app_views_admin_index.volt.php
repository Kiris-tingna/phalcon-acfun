<h1>新增类别节点</h1>

<?php echo $this->tag->form(array('admin/menu', 'method' => 'post')); ?>
<div class="row cl">
    <label class="form-label col-xs-2 col-md-1" for="mid">
        <span class="label label-success">所在节点</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        <?php echo $this->tag->textField(array('mid', 'class' => 'input-text')); ?>
    </div>
    <label class="form-label col-xs-2 col-md-1" for="menu">
        <span class="label label-success">节点名称</span>
    </label>
    <div class="formControls col-xs-3 col-md-4">
        <?php echo $this->tag->textField(array('menu', 'class' => 'input-text')); ?>
    </div>
</div>
<?php echo $this->tag->submitButton(array('新增', 'class' => 'btn btn-primary-outline radius')); ?>
<?php echo $this->tag->endform(); ?>
