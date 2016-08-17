<div class="col-md-1">
    <label class="label label-default"> 主要栏目 </label>
</div>
<div class="col-md-10">
    <?php foreach ($cates as $cate) { ?>
        <p>
            <?php $v17298183402iterator = $cate; $v17298183402incr = 0; $v17298183402loop = new stdClass(); $v17298183402loop->length = count($v17298183402iterator); $v17298183402loop->index = 1; $v17298183402loop->index0 = 1; $v17298183402loop->revindex = $v17298183402loop->length; $v17298183402loop->revindex0 = $v17298183402loop->length - 1; ?><?php foreach ($v17298183402iterator as $subcate) { ?><?php $v17298183402loop->first = ($v17298183402incr == 0); $v17298183402loop->index = $v17298183402incr + 1; $v17298183402loop->index0 = $v17298183402incr; $v17298183402loop->revindex = $v17298183402loop->length - $v17298183402incr; $v17298183402loop->revindex0 = $v17298183402loop->length - ($v17298183402incr + 1); $v17298183402loop->last = ($v17298183402incr == ($v17298183402loop->length - 1)); ?>
                <?php if ($v17298183402loop->first) { ?>
                    <?php echo $this->tag->linkTo(array('#', $subcate->name, 'class' => 'btn btn-primary')); ?>
                <?php } else { ?>
                    <?php echo $this->tag->linkTo(array('#', $subcate->name, 'class' => 'btn btn-default')); ?>
                <?php } ?>
            <?php $v17298183402incr++; } ?>
        </p>
    <?php } ?>
</div>
<hr>