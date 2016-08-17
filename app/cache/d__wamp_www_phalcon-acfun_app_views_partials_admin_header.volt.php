<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top navbar-black">
        <div class="container-fluid cl">
            <a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo $this->url->get('admin/index'); ?>">Phalcon.admin</a>
            <a class="logo navbar-logo-m f-l mr-10 visible-xs" href="<?php echo $this->url->get('admin/index'); ?>">Acfun</a>
            <span class="logo navbar-slogan f-l mr-10 hidden-xs">v1.0</span>
            <a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">

                <ul class="cl">
                    <li class="dropDown dropDown_hover">
                        <a href="javascript:;" class="dropDown_A">
                            <i class="Hui-iconfont">&#xe600;</i> 新增 <i class="Hui-iconfont">&#xe6d5;</i>
                        </a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="<?php echo $this->url->get('pa_article/new'); ?>"><i class="Hui-iconfont">&#xe616;</i> 文章</a></li>
                            <li><a href="<?php echo $this->url->get('pa_pic/new'); ?>" ><i class="Hui-iconfont">&#xe613;</i> 图片</a></li>
                            <li><a href="<?php echo $this->url->get('pa_animate/new'); ?>" ><i class="Hui-iconfont">&#xe620;</i> 动漫</a></li>
                            <li><a href="javascript:;" ><i class="Hui-iconfont">&#xe60d;</i> 用户</a></li>
                        </ul>
                    </li>
                </ul>

            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>超级管理员</li>
                    <li class="dropDown dropDown_hover"> <a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="#">个人信息</a></li>
                            <li><a href="#">切换账户</a></li>
                            <li><a href="#">退出</a></li>
                        </ul>
                    </li>
                    <li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
                </ul>
            </nav>
        </div>
    </div>
</header>