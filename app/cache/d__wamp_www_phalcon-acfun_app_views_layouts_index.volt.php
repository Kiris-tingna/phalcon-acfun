<?php echo $this->partial('partials/index_nav', array('navs' => $navs, 'banner' => $banner)); ?>

<div class="container">
    <?php echo $this->getContent(); ?>
</div>