<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>中创产业研究院</title>
    <link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
    <meta name="description" content="中创产业研究院于2014年正式成立，由国内外著名高校支持，中大创新谷、中大创投和各知名产业集团联合筹措成立的新型科研组织。中创产业研究院以“研究产业，服务产业，发展产业”为理念，以构建新兴产业发展研究基地和智库为基本方向，为国家产业发展提供智库支持，促进产业投融资活动的高效开展。中创产业研究院自成立以来，已联合政府部门、高校院所、社会机构等举办多场产业论坛，并发表多篇行业研究报告。同时，还与各行业专业平台联合出版发行了《众筹之路》和《六众之路》等书籍。" />
    <meta name="keywords" content="中创产业研究院、研究产业、服务产业、发展产业"/>
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>industryDetail.css">
</head>
<body style="background:#e9e9e9;padding-top:126px;">
<!--  search,nav begin-->
<!--  search,nav begin-->
<div class="in_head_wrap">
    <div class="in_search clear">
        <div class="in_search_left fl clear">
            <div class="in_search_logo fl">
                <img src="<?php echo (INDEX_IMAGES_URL); ?>sy-logo.png" alt="">
            </div>
            <p class="in_search_left_word fl">聚合创新，合作共赢</p>
        </div>
        <div class="in_search_right fr">
            <div class="clear in_inputDiv">
                <input class="fl in_input" type="text" placeholder="找分析，搜热门......">
                <div class="in_search_icon fr">
                    <img class="in_WX" src="<?php echo (INDEX_IMAGES_URL); ?>sy-sousuo-wdj.png" alt="">
                </div>
            </div>

            <div class="in_codeDiv">
                <img class="in_QRcode" src="<?php echo (INDEX_IMAGES_URL); ?>sy-erweima.png" alt="">
            </div>
        </div>
    </div>
</div>

<div class="nav_wrap">
    <div class="nav clear">
        <a href="/index.php/Index/Index/index" class="fl">首页</a>
        <a href="/index.php/Index/Article/article?acid=1" class="fl">产业方向</a>
        <a href="/index.php/Index/Article/trade" class="fl">行业资讯</a>
        <a href="/index.php/Index/About/introduce" class="fl">关于我们</a>
    </div>
</div>
<!--  search,nav end>-->
<!--  search,nav end>-->


<!--  main begin-->
<div class="inDet_main clear">
    <div class="inDet_main_left fl">
        <div class="inDet_main_left_head">
            <div class="clear">
                <img class="book_icon fl" src="<?php echo (INDEX_IMAGES_URL); ?>cyfx-icon-wenzhang.png" alt="">
                <span class="inDet_left_title fl"><?php echo ($arrData['title']); ?></span>
            </div>
            <div class="head_shareDiv clear">
                <p class="fl">
                    <?php switch($arrData["acid"]): case "1": ?>风险投资<?php break;?>
                        <?php case "2": ?>金融产业<?php break;?>
                        <?php case "3": ?>医疗产业<?php break;?>
                        <?php case "4": ?>新材料产业<?php break;?>
                        <?php case "5": ?>先进制造产业<?php break;?>
                        <?php default: ?>default<?php endswitch;?>

                    <span class="mar_left">来源： <?php echo ($arrData["from"]); ?></span>
                    <span class="mar_left">时间：<?php echo (date('Y-m-d H:i',strtotime($arrData["time"]))); ?> </span>
                    <span class="mar_left">阅读(<?php echo ($arrData["read_times"]); ?>)</span>
                </p>
                <div class="bdsharebuttonbox fr">
                    <a class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
                    <a class="qqzone" onclick="sharetoqqzone('分享到QQ空间')" title="分享到QQ空间"></a>
                    <a class="sina" onclick="sharetosina('分享到weibo')" title="分享到新浪微博"></a>
                </div>
            </div>

        </div>
        <div class="inDet_main_left_ct">
            <?php echo ($arrData["content"]); ?>
        </div>

    </div>

    <div class="inDet_main_right fr">
        <div class="in_art_option_r">
            <p class="option_r_tt">产品类别</p>
            <div class="main_tab">
                <?php if($arrData["acid"] == 1): ?><a href="/index.php/Index/Article/article?acid=1" class="ind_active" >风险投资</a>
                    <?php else: ?>
                    <a href="/index.php/Index/Article/article?acid=1">风险投资</a><?php endif; ?>
                <?php if($arrData["acid"] == 2): ?><a href="/index.php/Index/Article/article?acid=2" class="ind_active">金融行业</a>
                    <?php else: ?>
                    <a href="/index.php/Index/Article/article?acid=2">金融行业</a><?php endif; ?>
                <?php if($arrData["acid"] == 3): ?><a href="/index.php/Index/Article/article?acid=3" class="ind_active">医疗产业</a>
                    <?php else: ?>
                    <a href="/index.php/Index/Article/article?acid=3">医疗产业</a><?php endif; ?>
                <?php if($arrData["acid"] == 4): ?><a href="/index.php/Index/Article/article?acid=4" class="ind_active">新材料产业</a>
                    <?php else: ?>
                    <a href="/index.php/Index/Article/article?acid=4">新材料产业</a><?php endif; ?>
                <?php if($arrData["acid"] == 5): ?><a href="/index.php/Index/Article/article?acid=5" class="ind_active">先进制造产业</a>
                    <?php else: ?>
                    <a href="/index.php/Index/Article/article?acid=5">先进制造产业</a><?php endif; ?>
            </div>
        </div>

            <div class="in_art_option_r">
                <p class="option_r_tt">本类热门</p>
                <?php if(is_array($arrGroom)): foreach($arrGroom as $key=>$vo): ?><a href="/index.php/Index/Article/detail?arid=<?php echo ($vo["arid"]); ?>">
                        <div class="option_r_ct clear">
                            <div class="ind_ct_pho_r fl">
                                <img src="<?php echo (UPLOAD_URL); echo ($vo["thumbimg"]); ?>" alt="">
                            </div>
                            <div class="ind_ct_main_r fr">
                                <p class="ind_main_tit_r"><?php echo ($vo["title"]); ?></p>
                                <p class="ind_main_time_r"><?php echo (date('Y-m-d H:i',strtotime($vo["time"]))); ?> </p>
                                <p class="ind_main_read_r">阅读(<?php echo ($vo["read_times"]); ?>)</p>
                            </div>
                        </div>
                    </a><?php endforeach; endif; ?>
            </div>
    </div>
</div>

<!--  main end>-->

<!-- footer begin -->
<div class="in_footer">
    <p class="in_footer_link">
        <a href="/index.php/Index/About/introduce">关于我们</a>
        <a href="/index.php/Index/Other/contact">联系我们</a>
        <a href="/index.php/Index/Other/partner">合作伙伴</a>
        <a href="/index.php/Index/Other/declaration">法律声明</a>
        <a href="http://weibo.com/u/5340620666?refer_flag=1005055014_&is_hot=1" target="_blank">新浪微博</a>
    </p>
    <p class="in_friendly_link">
        友情链接：
        <a href="http://www.zdvc.com.cn/" target="_blank">中大创投</a>
        <a href="http://zdcxg.com/" target="_blank">中大创新谷</a>
        <a href="http://www.gdmv.cn/" target="_blank">广东医谷</a>
        <a href="http://www.paoding.cc/" target="_blank">庖丁技术</a>
        <a href="http://www.yunzhusalon.com/" target="_blank"v>云珠沙龙</a>
        <a href="http://www.haibie.com.cn/" target="_blank">海鳖众筹</a>
        <a href="http://www.chinacii.cn/" target="_blank">中创学院</a>
        <a href="http://www.smetalk.cn/" target="_blank">SME</a>
        <a href="http://www.g-sice.com/" target="_blank">校园直通车</a>
        <a href="https://mp.weixin.qq.com/mp/homepage?__biz=MzUyOTEyODg0Mw==&hid=1&sn=86dbe9087926c4502844c5f652c4529e&scene=18&uin=&key=&devicetype=Windows+7&version=6205051a&lang=zh_CN&ascene=7&winzoom=1" target="_blank">INNO-Talk</a>
    </p>
</div>
<div class="in_ICP">
    <a href="http://www.miitbeian.gov.cn/" target="_blank" style="color:#a9a9a9;"><?php echo session('word')[0]['value'] ?></a> <?php echo session('word')[1]['value'] ?>  地址：<?php echo session('word')[3]['value'] ?> <?php echo session('word')[2]['value'] ?>
</div>
<!-- footer end -->
</body>
<script src="<?php echo (INDEX_JS_URL); ?>jquery-3.0.0.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
<script>
    $(".nav a").eq(1).addClass('active');
    // share
    function sharetoqqzone (title) {
        var uu=window.location.href;
        var url=encodeURIComponent(uu);
        var shareqqzonestring='http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?summary='+title+'&url='+url;
        window.open(shareqqzonestring,'newwindow','height=800,width=800,top=100,left=100');
    }

    function sharetosina (title) {
        var uu=window.location.href;
        var url=encodeURIComponent(uu);
        var sharesinastring='http://v.t.sina.com.cn/share/share.php?title='+title+'&url='+url+'&content=utf-8&sourceUrl='+url;
        window.open(sharesinastring,'newwindow','height=400,width=400,top=100,left=100');
    }

    window._bd_share_config = {
        "common" : {
            "bdSnsKey" : {},
            "bdText" : "",
            "bdMini" : "2",
            "bdUrl" : window.location.href,
            "bdMiniList" : false,
            "bdPic" : "images/cyfx-icon-weixin.png",
            "bdStyle" : "0",
        },
        "share" : { "bdSize" : "22"}
    };
    with (document)
        0[(getElementsByTagName('head')[0] || body)
            .appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='
            + ~(-new Date() / 36e5)];
</script>
</html>