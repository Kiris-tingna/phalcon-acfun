
<h1></h1>
<div class="row" style="height: 310px; overflow: hidden">
    <div class="col-md-8">
        <div class="pa-ppt">
            <ul>
                <?php foreach ($bannerImages as $image) { ?>
                    <li><img class="pa-ppt-item" src="<?php echo $this->url->getStatic($image->url); ?>" alt="<?php echo $image->description; ?>"></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="col-md-4">
        <?php foreach ($sideImages as $side) { ?>
            <li class="pa-index-col col-md-6">
                <a href="<?php echo $this->url->get('index/v/'); ?>" class="pa-img-warpper">
                    <?php echo $this->tag->image(array($side->url, 'alt' => $side->description, 'class' => 'pa-index-item')); ?>
                </a>
                <p class="pa-tit-desc"><?php echo $side->name; ?></p>
                <p class="pa-sub-desc"><?php echo $side->description; ?></p>
            </li>
        <?php } ?>
    </div>
</div>



<?php foreach ($collections as $collection) { ?>
    <h1><?php echo $collection['area']->name; ?></h1>

    <div class="row">
        <div class="col-md-9">
        
        <?php foreach ($collection['content'] as $content) { ?>
            <li class="pa-index-col col-md-3">
                <a href="<?php echo $this->url->get('index/v/'); ?><?php echo $content->id; ?>" class="pa-img-large-warpper">
                    <?php echo $this->tag->image(array($content->url, 'alt' => $content->name, 'class' => 'pa-index-item')); ?>
                </a>
                <p><?php echo $content->name; ?><p>
                <p class="pa-sub-desc"><?php echo $content->description; ?><p>
            </li>
        <?php } ?>
        </div>
    </div>
<?php } ?>

<!-- footer -->
<?php echo $this->tag->linkTo(array('index/map', '网站地图')); ?>