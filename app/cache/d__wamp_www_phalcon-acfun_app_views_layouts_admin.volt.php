<?php echo $this->partial('partials/admin_header'); ?>
<?php echo $this->partial('partials/admin_aside'); ?>

<section class="Hui-article-box">
    <nav class="breadcrumb">
        <i class="Hui-iconfont Hui-iconfont-home"></i>
        <a class="maincolor" href="<?php echo $this->url->get('admin/index'); ?>">首页</a>
        <span class="c-999 en">&gt;</span>组件
        <span class="c-999 en">&gt;</span><span class="c-666">导航</span>
    </nav>

    <div class="Hui-article">
        <div class="page-container">
            <?php echo $this->getContent(); ?>
        </div>
    </div>
</section>
