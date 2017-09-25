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
            <form class="form form-horizontal" id="form-article-add">
                <input type="hidden" id="indeximg_position" name="indeximg_position">
                <input type="hidden" id="thumbimg_position" name="thumbimg_position">
                <input type="hidden" id="content" name="content">
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>文章标题：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <input type="text" class="input-text" value="" placeholder="" id="title" name="title">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>文章分类：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <span class="select-box">
                            <select class="select" size="1" id="acid" name="acid">
                                <option value="0" selected>请选择</option>
                                <?php if(is_array($arrData)): foreach($arrData as $k=>$vo): ?><option value="<?php echo ($vo["acid"]); ?>"><?php echo ($vo["category"]); ?></option><?php endforeach; endif; ?>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>文章来源：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <input type="text" class="input-text" value="" placeholder="" id="from" name="from">
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>阅读次数：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <input type="text" class="input-text" value="" placeholder="" id="read_times" name="read_times">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>时间：</label>
                    <div class="formControls col-xs-8 col-sm-2">
                        <input type="text"
                               onfocus="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})"
                               id="time" name="time" class="input-text Wdate">
                    </div>
                </div>

                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>首页列表图：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="file" class="indeximg" name="indeximg" onchange="upload('indeximg')"/><span class="c-red" id="indeximg_success">(图片规格：341*440)</span>
                        <p><br><img src="" id="indeximg_see" style="width: 341px;height: 440px;"></p>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>列表图：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <input type="file" class="thumbimg" name="thumbimg" onchange="upload('thumbimg')"/><span class="c-red" id="thumbimg_success">(图片规格：244*182)</span>
                        <p><br><img src="" id="thumbimg_see" style="width: 244px;height: 182px;"></p>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>摘要：</label>
                    <div class="formControls col-xs-8 col-sm-5">
                        <textarea name="summary" id="summary" cols="" rows="" class="textarea" placeholder="少于100个字"
                                  onKeyUp="textarealength(this, 100)"></textarea>
                    </div>
                </div>
                <div class="row cl">
                    <label class="form-label col-xs-4 col-sm-2"><span class="c-red">* </span>文章内容：</label>
                    <div class="formControls col-xs-8 col-sm-9">
                        <script id="editor" type="text/plain" style="width:800px;height:800px;"></script>
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
                var t = $('#form-article-add').serializeArray();
                $.each(t, function() {
                    data[this.name] = this.value;
                });

                if(data.title==""||data.acid=="0"||data.from==""||data.read_times==""||data.time==""||data.indeximg_position==""||data.thumbimg_position==""||data.summary==""||data.content==""){
                    layer.msg('请把资料填完整', {icon: 7, time: 2000});
                    return false;
                }

                $.post('/index.php/Admin/Article/add?action=article', data, function (ret) {
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