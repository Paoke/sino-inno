<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!-->
<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>中创产业研究院后台 - 管理员登录</title>
    <link rel="Shortcut Icon" href="<?php echo (ADMIN_IMG_URL); ?>favicon.ico"/>
    <!-- CSS -->
    <link href="<?php echo (ADMIN_CSS_URL); ?>reset.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (ADMIN_CSS_URL); ?>supersized.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo (ADMIN_CSS_URL); ?>login.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="<?php echo (ADMIN_JS_URL); ?>html5.js"></script>
    <![endif]-->
    <script>
        var ADMIN_CSS_URL="<?php echo (ADMIN_CSS_URL); ?>";
        var ADMIN_JS_URL="<?php echo (ADMIN_JS_URL); ?>";
        var ADMIN_IMG_URL="<?php echo (ADMIN_IMG_URL); ?>";
    </script>
</head>

<body>

<div class="page-container">
    <h1>管理员登录</h1>

    <form action="/index.php/Admin/Login/login" method="post" id="formID">
        <input type="text" name="username" class="username" placeholder="用户名">
        <span class="username-error warn"></span>
        <input type="password" name="password" class="password" placeholder="密码">
        <span class="password-error warn"></span>
        <span class="check-error warn"></span>
        <button type="button" value="登录" onclick="check()">登录</button>
    </form>
</div>

<!-- Javascript -->
<script src="<?php echo (ADMIN_JS_URL); ?>jquery-1.8.2.min.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>jquery.form.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>supersized.3.2.7.min.js"></script>
<script src="<?php echo (ADMIN_JS_URL); ?>supersized-init.js"></script>
<script>
    $(function(){
        $('input').on('keyup',function(){
            $('.check-error').html("");
            var data = {};
            var t = $('#formID').serializeArray();
            $.each(t, function() {
                data[this.name] = this.value;
            });
            if(data['username']!=""){
                $('.username-error').html("");
            }
            if(data['password']!=""){
                $('.password-error').html("");
            }
        });

    });
    function check(){
        var data = {};
        var t = $('#formID').serializeArray();
        $.each(t, function() {
            data[this.name] = this.value;
        });
        if(data['username']==""){
            $('.username-error').html("用户名不能为空");
            return false;
        }
        if(data['password']==""){
            $('.password-error').html("密码不能为空");
            return false;
        }
        $("#formID").ajaxSubmit({
            dataType: 'json',
            beforeSend: function () {

            },
            uploadProgress: function (event, position, total, percentComplete) {

            },
            success: function (data) {
                if (data == 'true') {
                    window.location.href="/index.php/Admin/Index/index";
                } else {
                    $('.check-error').html("用户名或者密码错误");
                }
            },
            error: function (xhr) {
                //var result = $.trim(xhr.responseText);//去掉字符串两端的空白
            }
        });
    }
</script>
</body>

</html>