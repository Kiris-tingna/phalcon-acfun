## usage of phalcon
* 修改db

``` 
    -- config.ini文件 --
        [database]
        adapter  = Mysql
        host     = "127.0.0.1"
        username = "root"
        password = "secret"
        dbname   = "store_db"

        [phalcon]
        controllersDir = "../app/controllers/"
        modelsDir      = "../app/models/"
        viewsDir       = "../app/views/"
        baseUri        = "/store/"
```

* create a project

```
    phalcon project [name] [type] [directory] [enable-webtools]

    opations:
    --name=s             项目名
    --enable-webtools=b  是否禁用webtools
    --directory=s        项目生成的目录(默认当前命令执行目录)
    --type=s             项目类型(cli, micro, simple, modules)

```

* create a controller

```
    phalcon controller --name test

    创建一个名为test的控制器
```

* create a model

```
    phalcon model --name [tablename]

    opations:
    --get-set           getter/setter
    --abstract          抽象模型
```

* 针对一个实例表的curd操作

```
    phalcon scaffold --table-name [tablename]

    output:products

    app/controllers/ProductsController.php  基本控制器
    app/models/Products.php                 模型类
    app/views/layout/products.phtml         基本视图
    app/views/products/new.phtml            create增加
    app/views/products/edit.phtml           update修改
    app/views/products/search.phtml         list查找
```