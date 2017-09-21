<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <LINK rel="Shortcut Icon" href="<?php echo (ADMIN_IMG_URL); ?>favicon.ico"/>
    <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>html5.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>respond.min.js"></script>
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>PIE_IE678.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>H-ui.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>H-ui.admin.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_LIB_HUI_ICONFONT_CSS_URL); ?>iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_LIB_ICHECK_CSS_URL); ?>icheck.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_SKIN_DEFAULT_CSS_URL); ?>skin.css" id="skin"/>
    <link rel="stylesheet" type="text/css" href="<?php echo (ADMIN_STATIC_HUI_CSS_URL); ?>style.css"/>
    <!--[if IE 6]>
    <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>中创产业研究院后台 - 后台管理</title>
</head>
<body>
<header class="navbar-wrapper">
    <div class="navbar navbar-fixed-top">
        <div class="container-fluid cl"><a class="logo navbar-logo f-l mr-10 hidden-xs" href="###">中创产业研究院后台</a><span
                class="logo navbar-slogan f-l mr-10 hidden-xs">后台管理</span> <a aria-hidden="false"
                                                                              class="nav-toggle Hui-iconfont visible-xs"
                                                                              href="javascript:;">&#xe667;</a>
            <nav class="nav navbar-nav">
                <ul class="cl">

                </ul>
            </nav>
            <nav id="Hui-userbar" class="nav navbar-nav navbar-userbar hidden-xs">
                <ul class="cl">
                    <li>后台管理员</li>
                    <li class="dropDown dropDown_hover"><a href="#" class="dropDown_A"><?php echo ($_SESSION['arrUser']['adminusername']); ?><i class="Hui-iconfont">&#xe6d5;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" onclick="member_show('<?php echo ($_SESSION['arrUser']['adminusername']); ?>', '/index.php/Admin/Users/adminShow', '', '360', '400')">账号信息</a></li>
                            <li><a href="javascript:;"
                                   onclick="admin_edit('编辑','/index.php/Admin/Users/adminEdit' , '', '770', '370')">编辑信息</a></li>
                            <li><a href="javascript:;"
                                   onClick="change_password('修改密码','/index.php/Admin/Users/changePassword' , '', '770', '300')">修改密码</a></li>
                            <li><a href="/index.php/Admin/Login/out">退出</a></li>
                        </ul>
                    </li>
                    <!--<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">1</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>-->
                    <li id="Hui-skin" class="dropDown right dropDown_hover"><a href="javascript:;" class="dropDown_A" title="换肤"><i
                            class="Hui-iconfont" style="font-size:18px">&#xe62a;</i></a>
                        <ul class="dropDown-menu menu radius box-shadow">
                            <li><a href="javascript:;" data-val="default" title="默认（黑色）">默认（黑色）</a></li>
                            <li><a href="javascript:;" data-val="blue" title="蓝色">蓝色</a></li>
                            <li><a href="javascript:;" data-val="green" title="绿色">绿色</a></li>
                            <li><a href="javascript:;" data-val="red" title="红色">红色</a></li>
                            <li><a href="javascript:;" data-val="yellow" title="黄色">黄色</a></li>
                            <li><a href="javascript:;" data-val="orange" title="绿色">橙色</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<aside class="Hui-aside">
    <input runat="server" id="divScrollValue" type="hidden" value=""/>
    <div class="menu_dropdown bk_2">
        <dl id="menu-article">
            <dt><i class="Hui-iconfont">&#xe67f;</i> 基本设置<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i>
            </dt>
            <dd>
                <ul>
                    <li><a _href="/index.php/Admin/Setup/bannerList" data-title="首页Banner图列表" href="javascript:void(0)">首页Banner图列表</a></li>
                    <li><a data-title="底部文字设置" href="javascript:void(0)" onclick="edit_word('底部文字设置', '/index.php/Admin/Setup/editWord', '900', '450')">底部文字设置</a></li>
                    <li><a _href="/index.php/Admin/Setup/cooperationList" data-title="合作机构列表" href="javascript:void(0)">合作机构列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-product">
            <dt><i class="Hui-iconfont">&#xe616;</i> 文章管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="/index.php/Admin/Article/categoryList" data-title="文章分类" href="javascript:void(0)">文章分类</a></li>
                    <li><a _href="/index.php/Admin/Article/articleList" data-title="文章列表" href="javascript:void(0)">文章列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-picture">
            <dt><i class="Hui-iconfont">&#xe63e;</i> 活动管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="/index.php/Admin/Activity/activityList" data-title="活动列表" href="javascript:void(0)">活动列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-comments">
            <dt><i class="Hui-iconfont">&#xe70d;</i> 师资队伍<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="/index.php/Admin/Teacher/memberList" data-title="成员列表" href="javascript:void(0);">成员列表</a></li>
                </ul>
            </dd>
        </dl>
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 优秀学员<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="/index.php/Admin/Student/memberList" data-title="嘉宾列表" href="javascript:void(0);">成员列表</a></li>

                </ul>
            </dd>
        </dl>
        <dl id="menu-member">
            <dt><i class="Hui-iconfont">&#xe60d;</i> 报名管理<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="/index.php/Admin/Enroll/enrollList" data-title="报名列表" href="javascript:void(0);">报名列表</a></li>
                </ul>
            </dd>

        </dl>
        <dl id="menu-tongji">
            <dt><i class="Hui-iconfont">&#xe61a;</i> 关于我们<i class="Hui-iconfont menu_dropdown-arrow">&#xe6d5;</i></dt>
            <dd>
                <ul>
                    <li><a _href="/index.php/Admin/About/editContent?abid=1" data-title="编辑内容" href="javascript:void(0)">学院简介</a></li>
                    <li><a _href="/index.php/Admin/About/editContent?abid=2" data-title="预览页面" href="javascript:void(0)">院长致辞</a></li>
                    <li><a _href="/index.php/Admin/About/editContent?abid=3" data-title="编辑内容" href="javascript:void(0)">学院委员会</a></li>
                    <li><a _href="/index.php/Admin/About/editContent?abid=4" data-title="预览页面" href="javascript:void(0)">申请入读</a></li>
                </ul>
            </dd>
        </dl>
    </div>
</aside>
<div class="dislpayArrow hidden-xs"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
<section class="Hui-article-box">
    <div id="Hui-tabNav" class="Hui-tabNav hidden-xs">
        <div class="Hui-tabNav-wp">
            <ul id="min_title_list" class="acrossTab cl">
                <li class="active"><span title="我的桌面" data-href="/index.php/Admin/Index/welcome">我的桌面</span><em></em></li>
            </ul>
        </div>
        <div class="Hui-tabNav-more btn-group"><a id="js-tabNav-prev" class="btn radius btn-default size-S" href="javascript:;"><i
                class="Hui-iconfont">&#xe6d4;</i></a><a id="js-tabNav-next" class="btn radius btn-default size-S"
                                                        href="javascript:;"><i class="Hui-iconfont">&#xe6d7;</i></a></div>
    </div>
    <div id="iframe_box" class="Hui-article">
        <div class="show_iframe">
            <div style="display:none" class="loading"></div>
            <iframe scrolling="yes" frameborder="0" src="/index.php/Admin/Index/welcome"></iframe>
        </div>
    </div>
</section>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_LIB_LAYER_JS_URL); ?>layer.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.js"></script>
<script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.admin.js"></script>
{literal}
<script type="text/javascript">

    function member_show(title, url, id, w, h){
        layer_show(title, url, w, h);
    }

    /*友情链接-添加*/
    function banner(title, url, w, h) {
        layer_show(title, url, w, h);
    }

    /*用户-编辑*/
    function admin_edit(title, url, id, w, h) {
        layer_show(title, url, w, h);
    }
    /*用户-修改密码*/
    function change_password(title, url, id, w, h){
        layer_show(title, url, w, h);
    }

    function edit_word(title, url, w, h){
        layer_show(title, url, w, h);
    }

</script>
{/literal}

</body>
</html>