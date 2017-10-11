<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>中创产业研究院</title>
    <link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
    <meta name="description" content="中创产业研究院于2014年正式成立，由国内外著名高校支持，中大创新谷、中大创投和各知名产业集团联合筹措成立的新型科研组织。中创产业研究院以“研究产业，服务产业，发展产业”为理念，以构建新兴产业发展研究基地和智库为基本方向，为国家产业发展提供智库支持，促进产业投融资活动的高效开展。中创产业研究院自成立以来，已联合政府部门、高校院所、社会机构等举办多场产业论坛，并发表多篇行业研究报告。同时，还与各行业专业平台联合出版发行了《众筹之路》和《六众之路》等书籍。" />
    <meta name="keywords" content="中创产业研究院、研究产业、服务产业、发展产业"/>
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
    <link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>aboutUs.css">
</head>
<body style="padding-top:126px;">
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

<!-- banner start -->
<div class="about_us_navbox">
    <div class="about_us_nav">
        <a href="/index.php/Index/About/introduce">
            <div class="aun_list " id="about_touwho">
                <div class="aun_omr_cn_mask" id="mask1"></div>
                <div class="aun_open_box">
                    <div class="aun_open_message">
                        <div class="aun_om_right">
                            <div class="aun_omr_cn">我院简介</div>
                        </div>
                        <div class="clear_both"></div>
                    </div>
                </div>
                <div class="aun_colse_box">我院简介</div>
            </div>
        </a>

        <a href="/index.php/Index/About/team">
            <div class="aun_list" id="about_gd">
                <div class="aun_omr_cn_mask" id="mask2"></div>
                <div class="aun_open_box">
                    <div class="aun_open_message">
                        <div class="aun_om_right">
                            <div class="aun_omr_cn">团队成员</div>
                        </div>
                    </div>
                </div>
                <div class="aun_colse_box">团队成员</div>
            </div>
        </a>

        <a href="/index.php/Index/About/develop?time=<?php echo ($time); ?>">
            <div class="aun_list select_aunlist" id="about_team">
                <div class="aun_omr_cn_mask" id="mask3"  style="display: none;"></div>
                <div class="aun_open_box">
                    <div class="aun_open_message">
                        <div class="aun_om_right">
                            <div class="aun_omr_cn">发展历程</div>
                        </div>
                    </div>
                </div>
                <div class="aun_colse_box">发展历程</div>
            </div>
        </a>
        <div class="clear_both"></div>
    </div>
</div>
<!-- banner end -->

<div class="div_fix_wrap">
    <!-- fix_nav start -->
    <div class="dev_fix">
        <p class="dev_fix_nav">
            <span style="margin-right:96px">发展历程</span>
            <?php if(is_array($arrTime)): foreach($arrTime as $key=>$vo): if($time == $vo['time']): ?><a href="/index.php/Index/About/develop?time=<?php echo ($vo["time"]); ?>" style="color: #ce1d19;"><span><?php echo ($vo["time"]); ?></span></a><?php else: ?><a href="/index.php/Index/About/develop?time=<?php echo ($vo["time"]); ?>" style="color:#666;"><span><?php echo ($vo["time"]); ?></span></a><?php endif; endforeach; endif; ?>
        </p>
        <div class="dev_fix_time">
            <p class="dev_fix_year"><?php echo ($time); ?></p>
            <!-- 				<a class="div_fix_date">2016.12.03</a>
                            <a class="div_fix_date">2016.09.24</a>
                            <a class="div_fix_date">2016.08.13</a>
                            <a class="div_fix_date">2016.06.25</a> -->
        </div>
    </div>
    <!-- fix_nav end -->
    <div class="dev_main">
        <?php echo ($arrData['value']); ?>
    </div>
</div>
<!-- footer begin -->
<div class="in_footer">
    <p class="in_footer_link">
        <a href="">关于我们</a>
        <a href="">联系我们</a>
        <a href="">合作伙伴</a>
        <a href="">法律声明</a>
        <a href="">新浪微博</a>
    </p>
    <p class="in_friendly_link">
        友情链接：
        <a href="">中大创投</a>
        <a href="">中大创新谷</a>
        <a href="">广东医谷</a>
        <a href="">庖丁技术</a>
        <a href="">云珠沙龙</a>
        <a href="">海鳖众筹</a>
        <a href="">中创学院</a>
        <a href="">SME</a>
        <a href="">校园直通车</a>
        <a href="">INNO-Talk</a>
    </p>
</div>
<div class="in_ICP">
    粤ICP备14039480号 Copyright © 2014-2017  中创研究院 版权所有       技术支持：广东庖丁技术开发股份有限公司
</div>
<!-- footer end -->
</body>
<script src="<?php echo (INDEX_JS_URL); ?>jquery-3.0.0.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>jquery.min.js"></script>
<script src="<?php echo (INDEX_JS_URL); ?>common.js"></script>
<script>
    $(".nav a").eq(3).addClass('active');

    $("#about_touwho").hover(function () {
        $(".aun_list").removeClass("select_aunlist");
        $(this).addClass("select_aunlist");
        $("#mask1").hide();
        $("#mask2,#mask3").show();
    }, function () {
        $(".aun_list").removeClass("select_aunlist");
        $("#about_team").addClass("select_aunlist");
        $("#mask3").hide();
        $("#mask2,#mask1").show();
    });

    $("#about_gd").hover(function () {
        $(".aun_list").removeClass("select_aunlist");
        $(this).addClass("select_aunlist");
        $("#mask2").hide();
        $("#mask1,#mask3").show();
    }, function () {
        $(".aun_list").removeClass("select_aunlist");
        $("#about_team").addClass("select_aunlist");
        $("#mask3").hide();
        $("#mask2,#mask1").show();
    });

    $("#about_team").hover(function () {
        $(".aun_list").removeClass("select_aunlist");
        $(this).addClass("select_aunlist");
        $("#mask3").hide();
        $("#mask2,#mask1").show();
    }, function () {
        $(".aun_list").removeClass("select_aunlist");
        $("#about_team").addClass("select_aunlist");
        $("#mask3").hide();
        $("#mask2,#mask1").show();
    });

    var i=0;
    $($("a[name='time']")).each(function(){
        if(i==0){
            $('.dev_fix_time').append('<a class="div_fix_date" href="#time'+(i+1)+'" style="color: #ce1d19">'+$(this).parent().text()+'</a><br/>');
        }else{
            $('.dev_fix_time').append('<a class="div_fix_date" href="#time'+(i+1)+'">'+$(this).parent().text()+'</a><br/>');
        }

        $(this).attr("id", 'time'+(i+1));
        i++;
    });

    $(function(){
        //锚点跳转滑动效果
        $('a[href*=#],area[href*=class]').click(function() {

            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                $('.dev_fix_time a').each(function() {
                    $(this).css('color', '#666');
                    }
                );
                $(this).css('color','#ce1d19');
                var $target = $(this.hash);
                $target = $target.length && $target || $('[name=' + this.hash.slice(1) + ']');
                if ($target.length) {
                    var targetOffset = $target.offset().top-380;
                    console.log(targetOffset);
                    $('html,body').animate({
                            scrollTop: targetOffset
                        },
                        1000);

                    return false;
                }
            }
        });
    })

</script>
</html>