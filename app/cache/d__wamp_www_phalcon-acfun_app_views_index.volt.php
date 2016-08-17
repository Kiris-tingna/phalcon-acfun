<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <?php echo $this->tag->getTitle(); ?>
        <?php echo $this->assets->outputCss(); ?>
    </head>
    <body>
        <?php echo $this->getContent(); ?>

        <?php echo $this->assets->outputJs(); ?>
    </body>
</html>
