<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>news</title>
    <style type="text/css">
        a {
            text-decoration: none;
            height: 20px;
            width: 100px;
            background-color: #83c373
        }

        li {
            display: inline;
        }

        #dengru {
            float: right
        }

        #bi {
            display: inline;
        }

        p {
            width: 1000px
        }

        #l {
            background-color: #00A8EF;
            width: 1000px;
        }
    </style>
</head>
<body>
<h1 id="bi">彼岸花开</h1>
<div id="dengru">
    <form action="login_process.php" method="post">
        <label for="username">用户昵称：</label>
        <input type="text" name="userName" id="username" size="30" maxlength="20">
        <br>
        <laber for="password">登入密码：</laber>
        <input type="password" name="passWord" id="password" size="30" maxlength="20">
        <br>
        验证码：<img src="../register/captcha.php?r=<?php echo rand()?>" style="width: 100px;height: 30px" id="captcha_img" border="1">
            <a href="javascript:void(0)" onclick="document.getElementById('captcha_img').src='captcha.php?r='+Math.random()">换一个</a>
        <br>
        请输入验证码：<input type="text" name="authcode" value=""><br>
        <input type="submit" name="submit" value="登入">
        <input type="button" name="Submit" value="注册" onclick="window.open('register.html')">
    </form>
</div>
<hr>
<h3>新闻文章</h3>
<?php
include_once("functiions/message.php");
include_once("functiions/database.php");
$m = new message();
$m->shouye(news);
?>
