<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-6-20
 * Time: 下午4:54
 */
include_once ("functiions/database.php");
getConnection();
if (isset($_GET['id'])){
    $s = "delete from news WHERE news_id=\"".$_GET['id']."\"";
    mysql_query($s);
}
closeConnection();
header("location:issue.php");
?>