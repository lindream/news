<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-6-11
 * Time: 下午6:19
 */
include_once("functiions/database.php");
session_start();
$username = addslashes($_POST['userName']);
$_SESSION['a']=$username;
$password = addslashes($_POST['passWord']);
if ($username&&$password){
    getConnection();
    $sql = "select * from user where userName='$username' and passWord='$password'";
    $resultSet = mysql_query($sql);
    if(strtolower($_REQUEST['authcode'])== $_SESSION['authcode']) {
        if ($username == 'lin' && $password == '123') {
            header("location:issue.php");
        } elseif (mysql_num_rows($resultSet) > 0) {
            $_SESSION['uid'] = 1;
            header("location:vipindex.php");
        } else {
            echo "<script>alert('User or Password error');window.location.href='index.php'</script>";
        }
        closeConnection();
    }else{
        echo "<script>alert('Verification code error');window.location.href='index.php'</script>";
    }
}else{
    echo "<script>alert('User or Password is empty');window.location.href='index.php'</script>";
}




?>