<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-6-20
 * Time: 下午5:24
 */
include_once ("functiions/database.php");
getConnection();
    $news_title = $_POST['news_title'];
    $news_content = $_POST['news_content'];
if (isset($_GET['id'])){
    if ($news_title != ''&&$news_content!='') {
//输入用户数据到数据库
        $s = "update news set news_title='$news_title',news_content='$news_content' WHERE news_id=\"".$_GET['id']."\"";
        mysql_query($s);
    }
}
closeConnection();
header("location:issue.php");
