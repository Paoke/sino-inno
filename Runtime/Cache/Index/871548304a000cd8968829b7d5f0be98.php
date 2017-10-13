<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>中创产业研究院</title>
	<link rel="shortcut icon" href="<?php echo (INDEX_IMAGES_URL); ?>favicon.ico">
	<meta name="description" content="中创产业研究院于2014年正式成立，由国内外著名高校支持，中大创新谷、中大创投和各知名产业集团联合筹措成立的新型科研组织。中创产业研究院以“研究产业，服务产业，发展产业”为理念，以构建新兴产业发展研究基地和智库为基本方向，为国家产业发展提供智库支持，促进产业投融资活动的高效开展。中创产业研究院自成立以来，已联合政府部门、高校院所、社会机构等举办多场产业论坛，并发表多篇行业研究报告。同时，还与各行业专业平台联合出版发行了《众筹之路》和《六众之路》等书籍。" />
	<meta name="keywords" content="中创产业研究院、研究产业、服务产业、发展产业"/>
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>swiper.css">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>common.css">
	<link rel="stylesheet" href="<?php echo (INDEX_CSS_URL); ?>index.css">
</head>
<body class="in_body">

	<img src="<?php echo (INDEX_IMAGES_URL); ?>logo.png" style="display:none;" alt="<?php echo (INDEX_IMAGES_URL); ?>logo.png">
	<!--  banner,nav begin-->
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

		<div class="in_banner">
			<div class="swiper-container" id="swiper-container1">
			 	<div class="swiper-wrapper">
					<?php if(is_array($arrBanner)): foreach($arrBanner as $k=>$vo): ?><div class="swiper-slide"><img src="<?php echo (UPLOAD_URL); echo ($vo["img"]); ?>" alt=""></div><?php endforeach; endif; ?>
			 	</div>
			 	<div class="swiper-pagination"></div>
			</div>
		</div>
		 <!-- 首页特定导航栏 -->
		<div class="in_nav_wrap" style="display:block;">
			<div class="in_nav clear">
				<a href="/index.php/Index/Index/index" class="in_nav_a fl">
					<img class="in_nav_icon" src="<?php echo (INDEX_IMAGES_URL); ?>home-icon-home.png" alt="">
					<p class="in_nav_l">首页</p>
				</a>
				<a href="/index.php/Index/Article/article?acid=1" class="in_nav_a fl">
					<img class="in_nav_icon" src="<?php echo (INDEX_IMAGES_URL); ?>home-icon-orientation.png" alt="">
					<p class="in_nav_l">产业方向</p>
				</a>
				<a href="/index.php/Index/Article/trade" class="in_nav_a fl">
					<img class="in_nav_icon" src="<?php echo (INDEX_IMAGES_URL); ?>home-icon-news.png" alt="">
					<p class="in_nav_l">行业资讯</p>
				</a>
				<a href="/index.php/Index/About/introduce" class="in_nav_a fl">
					<img class="in_nav_icon" src="<?php echo (INDEX_IMAGES_URL); ?>home-icon-about-us.png" alt="">
					<p class="in_nav_l">关于我们</p>
				</a>
			</div>
		</div>
		<!-- 通用导航栏 -->
		<div class="nav_wrap" style="display:none;z-index:999;">
			<div class="nav clear">
				<a href="/index.php/Index/Index/index" class="fl">首页</a>
				<a href="/index.php/Index/Article/article?acid=1" class="fl">产业方向</a>
				<a href="/index.php/Index/Article/trade" class="fl">行业资讯</a>
				<a href="/index.php/Index/About/introduce" class="fl">关于我们</a>
			</div>
		</div>
	<!--  banner,nav end>-->

	<!--  news begin-->
		<p class="in_news_title">最新资讯</p>
		<div class="in_news clear">
			<?php $__FOR_START_10383__=0;$__FOR_END_10383__=3;for($i=$__FOR_START_10383__;$i < $__FOR_END_10383__;$i+=1){ ?><div class="in_news_section fl" style="background:url(<?php echo (UPLOAD_URL); echo ($arrArticle[$i]["indeximg"]); ?>)";>
					<div class="in_news_mask"></div>
					<p class="in_sec_tit">
						<?php echo ($arrArticle[$i]["title"]); ?>
					</p>
					<p class="in_sec_intro"><?php echo ($arrArticle[$i]["summary"]); ?>......</p>
					<?php if($arrArticle[$i]['acid'] == 6): ?><a href="/index.php/Index/Article/tradeDetail?arid=<?php echo ($arrArticle[$i]["arid"]); ?>" class="know_more">了解更多</a>
						<?php else: ?>
						<a href="/index.php/Index/Article/detail?arid=<?php echo ($arrArticle[$i]["arid"]); ?>" class="know_more">了解更多</a><?php endif; ?>
				</div><?php } ?>
		</div>
	<!--  news end-->

	<!--  article begin-->
		<div class="in_art_intro clear">
			<span class="fl">热文推荐</span>
			<a href="/index.php/Index/Article/article?acid=1"><p class="fr">更多<img src="<?php echo (INDEX_IMAGES_URL); ?>sy-gd-wdj.png" alt=""></p></a>
		</div>

		<div class="in_art_content ">
			<?php $__FOR_START_1820__=3;$__FOR_END_1820__=7;for($i=$__FOR_START_1820__;$i < $__FOR_END_1820__;$i+=1){ if($arrArticle[$i]['acid'] == 6): ?><a href="/index.php/Index/Article/tradeDetail?arid=<?php echo ($arrArticle[$i]["arid"]); ?>">
						<div class="in_art_option clear">
							<div class="in_ct_pho fl">
								<img src="<?php echo (UPLOAD_URL); echo ($arrArticle[$i]["thumbimg"]); ?>" alt="" style="width: 320px;height: 230px;">
							</div>
							<div class="in_ct_main fr">
								<p class="in_main_tit"><?php echo ($arrArticle[$i]["title"]); ?></p>
								<p class="in_main_ct"><?php echo ($arrArticle[$i]["summary"]); ?>......</p>
								<p class="in_main_time"><?php echo (date('Y-m-d H:i',strtotime($arrArticle[$i]["time"]))); ?><span class="in_main_read">阅读(<?php echo ($arrArticle[$i]["read_times"]); ?>)</span></p>
							</div>
						</div>
					</a>
					<?php else: ?>
					<a href="/index.php/Index/Article/detail?arid=<?php echo ($arrArticle[$i]["arid"]); ?>">
						<div class="in_art_option clear">
							<div class="in_ct_pho fl">
								<img src="<?php echo (UPLOAD_URL); echo ($arrArticle[$i]["thumbimg"]); ?>" alt="" style="width: 320px;height: 230px;">
							</div>
							<div class="in_ct_main fr">
								<p class="in_main_tit"><?php echo ($arrArticle[$i]["title"]); ?></p>
								<p class="in_main_ct"><?php echo ($arrArticle[$i]["summary"]); ?>......</p>
								<p class="in_main_time"><?php echo (date('Y-m-d H:i',strtotime($arrArticle[$i]["time"]))); ?><span class="in_main_read">阅读(<?php echo ($arrArticle[$i]["read_times"]); ?>)</span></p>
							</div>
						</div>
					</a><?php endif; } ?>
			<div id="more" style="display: none;">
				<?php $__FOR_START_16165__=7;$__FOR_END_16165__=11;for($i=$__FOR_START_16165__;$i < $__FOR_END_16165__;$i+=1){ if($arrArticle[$i]['acid'] == 6): ?><a href="/index.php/Index/Article/tradeDetail?arid=<?php echo ($arrArticle[$i]["arid"]); ?>">
							<div class="in_art_option clear">
								<div class="in_ct_pho fl">
									<img src="<?php echo (UPLOAD_URL); echo ($arrArticle[$i]["thumbimg"]); ?>" alt="" style="width: 320px;height: 230px;">
								</div>
								<div class="in_ct_main fr">
									<p class="in_main_tit"><?php echo ($arrArticle[$i]["title"]); ?></p>
									<p class="in_main_ct"><?php echo ($arrArticle[$i]["summary"]); ?>......</p>
									<p class="in_main_time"><?php echo (date('Y-m-d H:i',strtotime($arrArticle[$i]["time"]))); ?><span class="in_main_read">阅读(<?php echo ($arrArticle[$i]["read_times"]); ?>)</span></p>
								</div>
							</div>
						</a>
					<?php else: ?>
						<a href="/index.php/Index/Article/detail?arid=<?php echo ($arrArticle[$i]["arid"]); ?>">
							<div class="in_art_option clear">
								<div class="in_ct_pho fl">
									<img src="<?php echo (UPLOAD_URL); echo ($arrArticle[$i]["thumbimg"]); ?>" alt="" style="width: 320px;height: 230px;">
								</div>
								<div class="in_ct_main fr">
									<p class="in_main_tit"><?php echo ($arrArticle[$i]["title"]); ?></p>
									<p class="in_main_ct"><?php echo ($arrArticle[$i]["summary"]); ?>......</p>
									<p class="in_main_time"><?php echo (date('Y-m-d H:i',strtotime($arrArticle[$i]["time"]))); ?><span class="in_main_read">阅读(<?php echo ($arrArticle[$i]["read_times"]); ?>)</span></p>
								</div>
							</div>
						</a><?php endif; } ?>
			</div>
		</div>
		<div class="in_loadingmore"></div>
		<a href="/index.php/Index/Article/article?acid=1" class="in_more">查看更多</a>
	<!--  article end-->

	<!--  active begin-->
		<div class="in_active clear">
			<span class="fl">专题活动</span>
		</div>
		<div class="in_act_content clear">
			<div class="in_act_ct_pho fl">
				<div class="swiper-container" id="swiper-container2">
				    <div class="swiper-wrapper">
						<?php if(is_array($arrActivity)): foreach($arrActivity as $key=>$vo): ?><div class="swiper-slide"><img src="<?php echo (UPLOAD_URL); echo ($vo["actimg"]); ?>" alt=""></div><?php endforeach; endif; ?>
				    </div>
				    <!-- 自定义id，控制分页器属性 swiper.css  line 192 -->
				    <div class="swiper-pagination" id="swiper-pagination2"></div>
				</div>

			</div>
			<!-- 轮播控制tab -->
			<?php if(is_array($arrActivity)): foreach($arrActivity as $k=>$vo): if($k == 0): ?><div class="in_act_main fr in_main_active">
						<p class="in_act_tit"><?php echo ($vo["title"]); ?></p>
						<div class="in_act_ct">
							<p class="in_ct_intro"><?php echo ($vo["summary"]); ?>......</p>
							<p class="in_act_intro">时间：<?php echo ($vo["start_time"]); ?>-<?php echo ($vo["end_time"]); ?></p>
							<p class="in_act_intro">地点：<?php echo ($vo["address"]); ?></p>
							<p>费用：<?php echo ($vo["expense"]); ?></p>
						</div>
						<?php if($vo["status"] == 1): ?><a href="<?php echo ($vo["link"]); ?>" target="_blank" class="in_immediately">立即报名</a>
						<?php else: ?>
							<a href="javascript:" class="in_immediately">活动结束</a><?php endif; ?>
					</div>
					<?php else: ?>
					<div class="in_act_main fr">
						<p class="in_act_tit"><?php echo ($vo["title"]); ?></p>
						<div class="in_act_ct">
							<p class="in_ct_intro"><?php echo ($vo["summary"]); ?>......</p>
							<p class="in_act_intro">时间：<?php echo ($vo["start_time"]); ?>-<?php echo ($vo["end_time"]); ?></p>
							<p class="in_act_intro">地点：<?php echo ($vo["address"]); ?></p>
							<p>费用：<?php echo ($vo["expense"]); ?></p>
						</div>
						<?php if($vo["status"] == 1): ?><a href="<?php echo ($vo["link"]); ?>" target="_blank" class="in_immediately">立即报名</a>
							<?php else: ?>
							<a href="javascript:" class="in_immediately">活动结束</a><?php endif; ?>
					</div><?php endif; endforeach; endif; ?>
		</div>
	<!--  active end-->

	<!-- cooperative begin -->
		<div class="in_active">
			<span>合作机构</span>
		</div>
		<div class="swiper-container" id="swiper-container3">
		  <div class="swiper-wrapper">
		    <div class="swiper-slide">
		    	<div class="in_cooperative clear">
					<?php if(is_array($arrCooperation)): foreach($arrCooperation as $k=>$vo): if(in_array(($vo["category"]), explode(',',"1"))): ?><img src="<?php echo (UPLOAD_URL); echo ($vo["logo"]); ?>" alt=""><?php endif; endforeach; endif; ?>
				</div>
			</div>
		    <div class="swiper-slide">
		    	<div class="in_cooperative clear">
					<?php if(is_array($arrCooperation)): foreach($arrCooperation as $k=>$vo): if(in_array(($vo["category"]), explode(',',"2"))): ?><img src="<?php echo (UPLOAD_URL); echo ($vo["logo"]); ?>" alt=""><?php endif; endforeach; endif; ?>
				</div>
		    </div>
		    <div class="swiper-slide">
    	    	<div class="in_cooperative clear">
					<?php if(is_array($arrCooperation)): foreach($arrCooperation as $k=>$vo): if(in_array(($vo["category"]), explode(',',"3"))): ?><img src="<?php echo (UPLOAD_URL); echo ($vo["logo"]); ?>" alt=""><?php endif; endforeach; endif; ?>
    			</div>
		    </div>
		  </div>
		  <div class="swiper-pagination"></div>
		</div>
	<!-- cooperative end -->

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
<script src="<?php echo (INDEX_JS_URL); ?>swiper.js"></script>
<script>
	// 轮播
	var mySwiper1 = new Swiper('#swiper-container1', {
		pagination : '.swiper-pagination',
		paginationClickable :true,
		loop:true,
		autoplay: 3000
	})

	var mySwiper2 = new Swiper('#swiper-container2', {
		pagination : '.swiper-pagination',
		paginationClickable :true,
		autoplay: 2000,
		onSlideChangeStart: function(){
		     var index = mySwiper2.activeIndex;
		     $(".in_act_main").eq(index).addClass('in_main_active').siblings().removeClass('in_main_active');
		    }

	})

	var mySwiper3 = new Swiper('#swiper-container3', {
		pagination : '.swiper-pagination',
		paginationClickable :true,
		loop:true,
		autoplay: 3000
	})

	// 导航栏置顶后固定
	$(function () {
        var ie6 = /msie 6/i.test(navigator.userAgent),
           dv = $('.in_nav_wrap'), //大导航栏
           lv = $(".nav_wrap"),	   //小导航栏
           st;
        dv.attr('otop', dv.offset().top); //存储原来的距离顶部的距离
        // console.log(dv.attr('otop')); //387
        $(window).scroll(function () {
       		 //滚动条距离顶部位置
            st = Math.max(document.body.scrollTop || document.documentElement.scrollTop);
            // console.log(y);
            // console.log(st);
            console.log(parseInt(dv.attr('otop'))-st);
            // 搜索区域height == 80px;
            if (parseInt(dv.attr('otop'))-st <= 80) {
           		dv.hide();
           		lv.show();
                if (ie6) { //IE6不支持fixed属性，所以只能靠设置position为absolute和top实现此效果
                   dv.css({ position: 'absolute', top: st });
                   lv.css({ position: 'absolute', top: st });
                }
                // 判断条件||上两个导航栏，因为其中一个会隐藏
                else if(dv.css('position') != 'fixed' || lv.css('position') != 'fixed'){
                    // dv.css({ 'position': 'fixed', top: 80,zIndex:999});
                    lv.css({ 'position': 'fixed', top: 80,zIndex:999});
                    // 导航栏变成fixed定位后脱离文档,需要给内容加内边距填补空白处，否则到了临界点后内容区会往上跳
                   $('.in_news_title').css('padding-top','101px');
               }
            } else if (dv.css('position') != 'relative' || lv.css('position') != 'relative'){
           		lv.hide();
           	    dv.show();
                dv.css({ 'position': 'relative', top: 0, });
                // lv.css({ 'position': 'relative', top: 0, });
                $('.in_news_title').css('padding-top','');
            }
       });
   });
	// 加载更多
	$(".in_loadingmore").on("click",function(){
		$('#more').show();
        $(".in_loadingmore").hide();
        $(".in_more").css('display','block');
	})

</script>
</html>