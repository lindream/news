<?php
include_once("functiions/database.php");
getConnection();
$_GET['id'];
$reuSQL = "select * from news WHERE news_id=\"".$_GET['id']."\"";
$reResult = mysql_query($reuSQL);
$user = mysql_fetch_array($reResult);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>news</title>
    <style type="text/css">
        a{text-decoration: none;height: 20px;width: 100px;background-color: #83c373}
        li{display: inline;}
        #dengru{float: right}
        #bi{display:inline;}
        p{width: 1000px}
        #l{background-color: #00A8EF;width: 1000px;}
    </style>
</head>
<body>
<h1 id="bi">彼岸花开</h1>
<input type="button" name="Submit" value="退出登入" onclick="window.location='news.php'" style="float: right">
<hr>
<h3>修改新闻</h3>
<form action="update.php?id=<?php echo $_GET['id']?>" method="post">
    <label for="rel">新闻标题：</label><br>
    <input type="text" name="news_title" id="rel" size="30" maxlength="20" value="<?php echo $user['news_title'];?>"><br>
    <label for="re">新闻内容：</label><br>
    <textarea name="news_content" id="re" cols="30" rows="10"><?php echo $user['news_content'];?></textarea>
    <input type="submit" name="submit" value="修改">
</form>
</body>
</html>