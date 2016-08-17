
<div class="z-header">
    <div class="z-banner">
        <div class="z-background" style="background-image: url(<?php echo $banner; ?>)"></div>
        <div class="z-mask"></div>
    </div>
    <div class="z-nav">
        <div class="container z-container">
            <ul class="z-menu clearfix">
                <?php foreach ($navs as $nav) { ?>
                    <li class="z-item"><?php echo $nav; ?></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<div class="z-img" style="background-image: url(<?php echo $banner; ?>)"></div>