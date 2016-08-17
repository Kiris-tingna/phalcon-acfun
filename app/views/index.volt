<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="utf-8">
        <meta name="renderer" content="webkit|ie-comp|ie-stand">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        {{ get_title() }}
        {{ assets.outputCss() }}
    </head>
    <body>
        {{ content() }}

        {{ assets.outputJs() }}
    </body>
</html>
