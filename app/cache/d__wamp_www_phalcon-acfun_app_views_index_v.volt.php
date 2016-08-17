<h3>name: <?php echo $collect->name; ?></h3>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <img class="img-thumbnail" src="<?php echo $picture->origin_url; ?>" alt="<?php echo $collect->name; ?>">
    </div>
    <div class="col-md-8 col-sm-8">
        <p><span>别名</span><?php echo $collect->description; ?></p>
        <p><span>简介</span><?php echo $collect->content; ?></p>
    </div>
</div>
<span>created_at: <?php echo $collect->created_at; ?></span>
<span>published_at: <?php echo $collect->published_at; ?></span>

<div class="row">
<?php foreach ($animates as $ani) { ?>
    <div class="col-md-2 col-sm-2">
        <div class="thumbnail">
            <img class="img-rounded" src="<?php echo $ani->url; ?>" alt="<?php echo $ani->name; ?>">
            <p>id: <?php echo $ani->id; ?></p>
            <p><?php echo $ani->name; ?></p>
            <p><?php echo $ani->description; ?></p>
            <p><?php echo $ani->content; ?></p>
            <p>published_at: <?php echo $ani->published_at; ?></p>
        </div>
    </div>
<?php } ?>
</div>