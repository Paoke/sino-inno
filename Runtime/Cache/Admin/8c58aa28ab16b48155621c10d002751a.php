<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
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
        <link href="<?php echo (ADMIN_LIB_WEBUPLOADER_CSS_URL); ?>webuploader.css" rel="stylesheet" type="text/css" />
        <!--[if IE 6]>
        <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js"></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->

        <title>中创产业研究院后台</title>
    </head>
    <body>
        <article class="page-container">
            <form action="" method="post" class="form form-horizontal" id="form-activity-add">
                <input type="hidden" id="indeximg_position" name="indeximg_position" value="<?php echo ($arrData['actimg']); ?>">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>标题：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <input type="text" class="input-text" value="<?php echo ($arrData['title']); ?>" placeholder="请输入标题" id="title" name="title">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>摘要：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <textarea name="summary" id="summary" cols="" rows="" class="textarea" placeholder="少于100个字"
                                  onKeyUp="textarealength(this, 100)"><?php echo ($arrData['summary']); ?></textarea>
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>开始时间：</label>
                    <div class="formControls col-xs-8 col-sm-2">
                        <input type="text"
                               onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                               id="start_time" name="start_time" class="input-text Wdate" value="<?php echo ($arrData['start_time']); ?>">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>结束时间：</label>
                    <div class="formControls col-xs-8 col-sm-2">
                        <input type="text"
                               onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                               id="end_time" name="end_time" class="input-text Wdate" value="<?php echo ($arrData['end_time']); ?>">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>费用：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <input type="text" class="input-text" value="<?php echo ($arrData['expense']); ?>" placeholder="请输入费用" id="expense" name="expense">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>地址：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <input type="text" class="input-text" value="<?php echo ($arrData['address']); ?>" placeholder="请输入地址" id="address" name="address">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>报名链接：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <input type="text" class="input-text" value="<?php echo ($arrData['link']); ?>" placeholder="请输入报名链接" id="link" name="link">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>宣传图：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="file" class="indeximg" name="indeximg" onchange="upload('indeximg')"/><span class="c-red" id="indeximg_success">(图片规格：700*366)</span>
                        <p><br><img src="<?php echo (UPLOAD_URL); echo ($arrData['actimg']); ?>" id="indeximg_see" style="width: 700px;height: 366px;"></p>
                    </div>
                </div>


                <div class="row cl">
                    <div class="col-xs-2 col-sm-9 col-xs-offset-4 col-sm-offset-2">
                        <input class="btn btn-primary radius" type="button" id="btn_submit" value="&nbsp;&nbsp;修改&nbsp;&nbsp;">
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
        <script type="text/javascript" src="<?php echo (ADMIN_LIB_MY97DATEPICKER_JS_URL); ?>WdatePicker.js"></script>
        <script type="text/javascript" src="<?php echo (ADMIN_JS_URL); ?>uploadPic.js"></script>
        <!--/_footer /作为公共模版分离出去-->

        <!--请在下方写此页面业务相关的脚本-->
        <script type="text/javascript">
            $('#btn_submit').on('click', function () {
                var data = {};
                var t = $('#form-activity-add').serializeArray();
                $.each(t, function() {
                    data[this.name] = this.value;
                });

                $.post('/index.php/Admin/Activity/editActivity?acid=<?php echo ($arrData["acid"]); ?>', data, function (ret) {
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