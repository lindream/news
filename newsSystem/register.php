<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-6-11
 * Time: 下午4:35
 */
include_once("functiions/database.php");
$username = $_POST['userName'];
$password = $_POST['passWord'];
$confirmpassword = $_POST['confirmPassWord'];
if ($password!=$confirmpassword){
    exit("no");
}
$usernameSQL = "select * from user where userName='$username'";
getConnection();
$resultSet = mysql_query($usernameSQL);
if (mysql_num_rows($resultSet)>0){
    closeConnection();
    exit("The user is registered");
}

//输入用户数据到数据库
$registerSQL = "insert into user values(null,'$username','$password')";
mysql_query($registerSQL);
$userID = mysql_insert_id();
//从数据库提取用户信息
$userSQL = "select * from user where user_id=$userID";
$userResult = mysql_query($userSQL);
if ($user = mysql_fetch_array($userResult)){
    echo "<script>alert('zhuce succee');window.close();</script>";
}else{
    exit("fail");
}
?>