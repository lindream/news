<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-6-11
 * Time: 下午4:37
 */
$databaseConnection = null;
function getConnection(){
    $hostName = "localhost";
    $dataBase = "myweb";
    $userName = "root";
    $passWord = " ";
    global $databaseConnection;
    $databaseConnection = mysql_connect($hostName,$userName,$passWord) or die(mysql_error());
    mysql_query("set names 'utf8'");
    mysql_select_db($dataBase,$databaseConnection) or die(mysql_error());
}

function closeConnection(){
    global $databaseConnection;
    if ($databaseConnection){
        mysql_close($databaseConnection) or die(mysql_error());
    }
}



?>
