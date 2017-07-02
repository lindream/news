<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-6-11
 * Time: 下午9:40
 */
include_once ("functiions/message.php");
$ly=new message();
$ly->liuyan();
session_start();
$_SESSION['uid']=1;
if(isset($_SESSION['uid'])&&$_SESSION['uid']>0){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vipnews</title>
    <style>#l{background-color:#aaffaa;width: 1000px;}</style>
</head>
<body>
<input type="button" name="Submit" value="退出登入" onclick="window.location='index.php'" style="float: right">
<h1>彼岸花开</h1>
<hr>
<h3>新闻文章</h3>
<p><?php
    $wenzhang= new message();
    $wenzhang->wenzhang();
    ?></p>
<?php
$mdap=new message();
$mdap->mdap(vipnews);
$d = $_GET['idd'];
echo '<br>
    <br>
    <form action="vipnews.php?page=1&idd='.$d.'" method="post">
    <label for="re">评论：</label><br>
    <textarea name="remark" id="re" cols="30" rows="10"></textarea>
    <input type="submit" name="submit" value="提交">
</form>
</body>
</html>';
}else{
    header("location:news.php");
}
?>
