<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <LINK rel="Bookmark" href="/favicon.ico">
    <LINK rel="Shortcut Icon" href="/favicon.ico"/>
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
    <script type="text/javascript" src="<?php echo (ADMIN_LIB_JS_URL); ?>DD_belatedPNG_0.0.8a-min.js"></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <link href="<?php echo (ADMIN_LIB_WEBUPLOADER_CSS_URL); ?>webuploader.css" rel="stylesheet" type="text/css" />

    <!--/meta 作为公共模版分离出去-->

    <title>中创产业研究院后台</title>
</head>
<body>
<article class="page-container">
    <form class="form form-horizontal" id="form-summary-add">
        <input type="hidden" id="content" name="content">
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>时间：</label>
            <div class="formControls col-xs-8 col-sm-2">
                <input type="text"
                       onfocus="WdatePicker({dateFmt:'yyyy'})"
                       id="time" name="time" class="input-text Wdate" value="<?php echo ($arrData['time']); ?>">
            </div>
        </div>
        <div class="row cl">
            <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>内容：</label>
            <div class="formControls col-xs-8 col-sm-9">
                <script id="editor" type="text/plain" style="width:600px;height:600px;">
                    <?php echo ($arrData['value']); ?>
                </script>
                </div>
                </div>
                <div class="row cl">
                    <div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                    <button class="btn btn-primary radius" id="btn_submit" type="button" ><i class="Hui-iconfont">
                    &#xe632;</i> 保存
                </button>

                </div>
                </div>
                </form>
                </article>

                <!--_footer 作为公共模版分离出去-->
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERY_JS_URL); ?>jquery.min.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>jquery.form.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_LAYER_JS_URL); ?>layer.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_ICHECK_JS_URL); ?>jquery.icheck.min.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>jquery.validate.min.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>validate-methods.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_JQUERYVALIDATION_JS_URL); ?>messages_zh.min.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_STATIC_HUI_JS_URL); ?>H-ui.admin.js"></script>
                <!--/_footer /作为公共模版分离出去-->

                <!--请在下方写此页面业务相关的脚本-->
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_MY97DATEPICKER_JS_URL); ?>WdatePicker.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_WEBUPLOADER_JS_URL); ?>webuploader.min.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_UEDITOR_JS_URL); ?>ueditor.config.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_UEDITOR_JS_URL); ?>ueditor.all.min.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_LIB_UEDITOR_JS_URL); ?>lang/zh-cn/zh-cn.js"></script>
                <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>uploadPic.js"></script>
                <script type="text/javascript">
                    //实例化编辑器
                    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                    var ue = UE.getEditor('editor');
                    function getLocalData() {
                        //document.getElementById("content").value = UE.getEditor('editor').execCommand("getlocaldata");
                        document.getElementById("content").value = UE.getEditor('editor').getContent();
                    }

                    $('#btn_submit').on('click', function () {
                        getLocalData();
                        var data = {};
                        var t = $('#form-summary-add').serializeArray();
                        $.each(t, function() {
                            data[this.name] = this.value;
                        });

                        if(data.content==""||data.time==""){
                            layer.msg('请把资料填完整', {icon: 7, time: 2000});
                            return false;
                        }

                        $.post('/index.php/Admin/About/editSummary?id=<?php echo ($arrData["id"]); ?>', data, function (ret) {
                            if (ret == 'true') {
                                layer.msg('上传成功!', {icon: 1, time: 1000},function(){
                                    var index = parent.layer.getFrameIndex(window.name);

                                    parent.layer.close(index);
                                });

                            } else {
                                layer.msg('上传失败!', {icon: 2, time: 1000});
                            }
                        },'text');
                    });



                </script>
                <!--/请在上方写此页面业务相关的脚本-->
</body>
</html>