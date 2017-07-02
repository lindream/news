<?php
session_start();
if(isset($_SESSION['uid'])&&$_SESSION['uid']>0) {
    ?>
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
    <input type="button" name="Submit" value="退出登入" onclick="<?php $_SESSION['uid']=0;?>window.location='index.php'" style="float: right">
    <h1 id="bi">彼岸花开</h1>
    <hr>
    <h3>新闻文章</h3>
    <?php
    include_once("functiions/message.php");
    include_once("functiions/database.php");
    $m = new message();
    $m->shouye('vipnews');

}else{
    header("localhost:index.php");
}

?>