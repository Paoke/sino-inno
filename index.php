<?php


//网站编码设置  utf-8
header("content-type:text/html;charset=utf-8");

//开启调试模式
define("APP_DEBUG", "true");

//定义网站路径路径常量
define("SITE_URL", "http://sino.com/");

//定义前后台公共路径常量
define("PUBLIC_URL",SITE_URL."Public/");

//定义网站前后台图片公共路径
define("UPLOAD_URL",SITE_URL."Upload/");

//定义前台Index - CSS公共路径常量
define("INDEX_CSS_URL", PUBLIC_URL . "Index/css/");

//定义前台Index - IMAGES公共路径常量
define("INDEX_IMAGES_URL", PUBLIC_URL . "Index/images/");

//定义前台Index - JS公共路径常量
define("INDEX_JS_URL", PUBLIC_URL . "Index/js/");


//定义后台Admin  -  CSS公共路径常量
define("ADMIN_CSS_URL", PUBLIC_URL . "Admin/css/");
define("ADMIN_STATIC_HUI_CSS_URL", PUBLIC_URL . "Admin/static/h-ui/css/");
define("ADMIN_STATIC_HUI_SKIN_DEFAULT_CSS_URL", PUBLIC_URL . "Admin/static/h-ui/skin/default/");
define("ADMIN_LIB_ICHECK_CSS_URL", PUBLIC_URL . "Admin/lib/icheck/");
define("ADMIN_LIB_HUI_ICONFONT_CSS_URL", PUBLIC_URL . "Admin/lib/Hui-iconfont/1.0.7/");
define("ADMIN_LIB_WEBUPLOADER_CSS_URL", PUBLIC_URL . "Admin/lib/webuploader/0.1.5/");

//定义后台Admin  -  IMAGES公共路径常量
define("ADMIN_IMG_URL", PUBLIC_URL . "Admin/images/");
define("ADMIN_STATIC_HUI_IMG_URL", PUBLIC_URL . "Admin/static/h-ui/images/");

//定义后台Admin  -  JS公共路径常量
define("ADMIN_JS_URL", PUBLIC_URL . "Admin/js/");
define("ADMIN_LIB_JS_URL", PUBLIC_URL . "Admin/lib/");
define("ADMIN_LIB_PIE_BETAL_JS_URL", PUBLIC_URL . "Admin/lib/PIE-2.0beta1/");
define("ADMIN_LIB_JQUERY_JS_URL", PUBLIC_URL . "Admin/lib/jquery/1.9.1/");
define("ADMIN_LIB_JQUERYVALIDATION_JS_URL", PUBLIC_URL . "Admin/lib/jquery.validation/1.14.0/");
define("ADMIN_LIB_LAYER_JS_URL", PUBLIC_URL . "Admin/lib/layer/2.1/");
define("ADMIN_LIB_LAYPAGE_JS_URL", PUBLIC_URL . "Admin/lib/laypage/1.2/");
define("ADMIN_LIB_MY97DATEPICKER_JS_URL", PUBLIC_URL . "Admin/lib/My97DatePicker/");
define("ADMIN_LIB_DATATABLES_JS_URL", PUBLIC_URL . "Admin/lib/datatables/1.10.0/");
define("ADMIN_LIB_WEBUPLOADER_JS_URL", PUBLIC_URL . "Admin/lib/webuploader/0.1.5/");
define("ADMIN_LIB_UEDITOR_JS_URL", PUBLIC_URL . "Admin/lib/ueditor/1.4.3/");
define("ADMIN_LIB_VALIDFORM_JS_URL", PUBLIC_URL . "Admin/lib/Validform/5.3.2/");
define("ADMIN_LIB_HIGHCHARTS_JS_URL", PUBLIC_URL . "Admin/lib/Highcharts/4.1.7/js/");
define("ADMIN_LIB_HIGHCHARTS_MODULES_JS_URL", PUBLIC_URL . "Admin/lib/Highcharts/4.1.7/js/modules/");
define("ADMIN_LIB_ICHECK_JS_URL", PUBLIC_URL . "Admin/lib/icheck/");
define("ADMIN_STATIC_HUI_JS_URL", PUBLIC_URL . "Admin/static/h-ui/js/");


include "./ThinkPHP/ThinkPHP.php";


