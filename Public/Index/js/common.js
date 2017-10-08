// 导航栏高亮
var urlStr = location.href;  
// console.log(urlStr); 
$(".nav_wrap .nav a").each(function () {    
  if ((urlStr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') { 
    $(this).addClass('active'); 
  } else {  
    $(this).removeClass('active');  
  }  
}); 

// 搜索栏图标
$(".in_search_icon").on("click",function(){
	$(this).css("background","#ce1d19");
	$(this).find("img").attr("src","images/sy-sousuo-ydj.png")
})

var return_top = '<img class="return_top_icon" src="Public/Index/images/icon-back-to-top.png" alt="">';
$("body").append(return_top);
$(window).scroll(function(){
	var docTop = $(document).scrollTop();
	if(docTop>="508"){
		$('.return_top_icon').show();
	}
	else{
		$('.return_top_icon').hide();
	}

})

$(".return_top_icon").on("click",function(){
	$("html,body").animate({scrollTop: 0},400);		
})


