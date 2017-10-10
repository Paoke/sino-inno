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
    <style>
        .about_main_ct p{
            width: 1200px;
        }
    </style>
</head>
<body style="padding-top:265px;">
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
        <a href="aboutUsIntroduce.html" class="fl">关于我们</a>
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
            <div class="aun_list select_aunlist" id="about_gd">
                <div class="aun_omr_cn_mask" id="mask2"  style="display: none;"></div>
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

        <a href="aboutUsDev.html">
            <div class="aun_list" id="about_team">
                <div class="aun_omr_cn_mask" id="mask3"></div>
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

<!-- main start -->
<div class="about_team">
    <div class="about_main_ct">
    <?php echo ($arrData['value']); ?>
    </div>
    <?php if(is_array($arrMember)): foreach($arrMember as $key=>$vo): ?><div class="about_team_member clear">
            <div class="about_team_member_pho fl">
                <img src="<?php echo (UPLOAD_URL); echo ($vo["header"]); ?>" alt="">
            </div>
            <div class="about_team_member_intro fr">
                <p class="about_name"><?php echo ($vo["name"]); ?><span class="about_pst1"><?php echo ($vo["job"]); ?></span></p>
                <p class="about_intro_ct"><?php echo ($vo["summary"]); ?></p>

            </div>
        </div><?php endforeach; endif; ?>

    <p class="about_team_tit">顾问团队成员</p>
    <?php if(is_array($arrAdvisor)): foreach($arrAdvisor as $k=>$vo): ?><div class="about_adviser_main">
            <div class="about_adviser_member clear">
                <div class="about_adviser_member_name fl">
                    <?php echo ($vo["name"]); ?>
                </div>
                <div class="about_adviser_member_pst fr">
                    <?php echo ($vo["job"]); ?>
                </div>
                <?php if($k == 0): ?><img class="about_adviser_jt" src="<?php echo (INDEX_IMAGES_URL); ?>gywm-tdcy-icon-xs.png" alt="">
                    <?php else: ?>
                    <img class="about_adviser_jt" src="<?php echo (INDEX_IMAGES_URL); ?>gywm-tdcy-icon-xx.png" alt=""><?php endif; ?>
            </div>
            <?php if($k == 0): ?><div class="about_adviser_member_intro clear" style="display:block">
                <div class="about_adviser_intro_pho fl">
                    <img src="<?php echo (UPLOAD_URL); echo ($vo["header"]); ?>" alt="">
                </div>
                <div class="about_adviser_right fr">
                    <?php echo ($vo["summary"]); ?>
                </div>
            </div>
                <?php else: ?>
                <div class="about_adviser_member_intro clear">
                    <div class="about_adviser_intro_pho fl">
                        <img src="<?php echo (UPLOAD_URL); echo ($vo["header"]); ?>" alt="">
                    </div>
                    <div class="about_adviser_right fr">
                        <?php echo ($vo["summary"]); ?>
                    </div>
                </div><?php endif; ?>
        </div><?php endforeach; endif; ?>
</div>
<!-- main end -->

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
        $("#about_gd").addClass("select_aunlist");
        $("#mask2").hide();
        $("#mask1,#mask3").show();
    });

    $("#about_gd").hover(function () {
        $(".aun_list").removeClass("select_aunlist");
        $(this).addClass("select_aunlist");
        $("#mask2").hide();
        $("#mask1,#mask3").show();
    }, function () {
        $(".aun_list").removeClass("select_aunlist");
        $("#about_gd").addClass("select_aunlist");
        $("#mask2").hide();
        $("#mask1,#mask3").show();
    });

    $("#about_team").hover(function () {
        $(".aun_list").removeClass("select_aunlist");
        $(this).addClass("select_aunlist");
        $("#mask3").hide();
        $("#mask2,#mask1").show();
    }, function () {
        $(".aun_list").removeClass("select_aunlist");
        $("#about_gd").addClass("select_aunlist");
        $("#mask2").hide();
        $("#mask1,#mask3").show();
    });

    $('.about_adviser_main').on('click',function(){
        // 判断当前元素是否是展开状态
        if($(this).find(".about_adviser_member_intro").css('display')=="block"){
            $(this).find(".about_adviser_member_intro").slideUp(300);
            $(this).find(".about_adviser_jt").attr("src","/Public/Index/images/gywm-tdcy-icon-xx.png");
        }
        else{
            $(".about_adviser_member_intro").slideUp(300);
            $(".about_adviser_jt").attr("src","/Public/Index/images/gywm-tdcy-icon-xx.png");
            $(this).find(".about_adviser_member_intro").slideDown(300);
            $(this).find(".about_adviser_jt").attr("src","/Public/Index/images/gywm-tdcy-icon-xs.png");
        }
    })

</script>
</html>