<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 17-6-20
 * Time: 下午1:21
 */
class message{
    public $a;
    function liuyan(){
        include_once("functiions/database.php");
        session_start();
        $a = $_SESSION['a'];
        getConnection();
        $remark = $_POST['remark'];
        $d = $_GET['idd'];
        if ($remark != '') {
//输入用户数据到数据库
            $reSQL = "insert into re values(null,'$remark',null,'$a','$d')";
            mysql_query($reSQL);
        }
        closeConnection();
    }
    function mdap($a){
        $this->a=$a;
        $d = $_GET['idd'];
        getConnection();
        $i=1;
// 总记录数
        $sql = "SELECT count(*)  FROM  re WHERE r_id='$d'";
        if ($rell=mysql_query($sql)){
            $totalnums=mysql_fetch_row($rell);
            echo "评论总数：".$totalnums[0]."<br>";
        }
// 每页显示条数
        $fnum = 6;

// 翻页数
        $pagenum = ceil($totalnums[0] / $fnum);
// 页数常量
        @$tmp = $_GET['page'];

//计算分页起始值
        if ($tmp == "") {
            $num = 0;
        } else {
            $num = ($tmp - 1) * $fnum;
        }

        $reuSQL = "select * from re WHERE r_id='$d' ORDER BY re_id DESC limit ".$num.",$fnum";
        $reResult = mysql_query($reuSQL);
        echo '<br>';
        while($user = mysql_fetch_array($reResult)){
            echo $i . '   ';
            $i += 1;
            echo '<ul id="l">留言用户：'.$user['userName'].'<br>'.'留言内容：'.$user['reconcent'].'<br>留言时间：'.$user['retime'].'<br></ul>';
        }
        closeConnection();
        echo "<br>";
// 翻页链接
        for ($i = 1; $i < $pagenum+1; $i++) {
            echo "<a href=".$a.".php?page=" . $i . ">" . $i . "</a>";
        }
    }


    function sue(){
        include_once("functiions/database.php");
        getConnection();
        $news_title = $_POST['news_title'];
        $news_content = $_POST['news_content'];
        if ($news_title != ''&&$news_content!='') {
//输入用户数据到数据库
            $reSQL = "insert into news values(null,'$news_title','$news_content',null)";
            mysql_query($reSQL);
        }
        closeConnection();
    }




    function newsmdap(){
        getConnection();
        $i=1;
// 总记录数
        $sql = "SELECT count(*)  FROM  news";
        if ($rell=mysql_query($sql)){
            $totalnums=mysql_fetch_row($rell);
            echo "新闻总数：".$totalnums[0]."<br>";
        }

// 每页显示条数
        $fnum = 6;

// 翻页数
        $pagenum = ceil($totalnums[0] / $fnum);
// 页数常量
        @$tmp = $_GET['page'];

//计算分页起始值
        if ($tmp == "") {
            $num = 0;
        } else {
            $num = ($tmp - 1) * $fnum;
        }
        $reuSQL = "select * from news ORDER BY news_id DESC limit ".$num.",$fnum";
        $reResult = mysql_query($reuSQL);

        echo '<br>';
        while($user = mysql_fetch_array($reResult)){
            echo $i . '   ';
            $i += 1;
            echo '<ul id="l">新闻标题：'.$user['news_title'].'<br>'.'新闻内容：'.$user['news_content'].'<br>发布时间：'.$user['news_issue_time'].'<br></ul>';
            echo "<a href=del.php?id=".$user['news_id'].">删除</a>";
//            echo "<a href=revamp.php?id=".$user['news_id']." TARGET='_blank'>修改</a><br>";
            echo "<a href=revamp.php?id=".$user['news_id'].">修改</a><br>";
        }
        closeConnection();
        echo "<br>";
// 翻页链接
        for ($i = 1; $i < $pagenum+1; $i++) {
            echo "<a href=issue.php?page=" . $i . ">" . $i . "</a>";
        }
    }



    function shouye($b){
        $this->a=$b;
        getConnection();
        $i=1;
// 总记录数
        $sql = "SELECT count(*)  FROM  news";
        if ($rell=mysql_query($sql)){
            $totalnums=mysql_fetch_row($rell);
            echo "新闻总数：".$totalnums[0]."<br>";
        }

// 每页显示条数
        $fnum = 6;

// 翻页数
        $pagenum = ceil($totalnums[0] / $fnum);
// 页数常量
        @$tmp = $_GET['page'];

//计算分页起始值
        if ($tmp == "") {
            $num = 0;
        } else {
            $num = ($tmp - 1) * $fnum;
        }
        $reuSQL = "select * from news ORDER BY news_id DESC limit ".$num.",$fnum";
        $reResult = mysql_query($reuSQL);

        echo '<br>';
        while($user = mysql_fetch_array($reResult)){
            echo $i . '   ';
            $i += 1;
            echo '<ul id="l">新闻标题：<a href='.$b.'.php?page=1&idd='.$user['news_id'].'>'.$user['news_title'].'</a><br>'.'新闻内容：'.$user['news_content'].'<br>发布时间：'.$user['news_issue_time'].'<br></ul>';
        }
        closeConnection();
        echo "<br>";
// 翻页链接
        for ($i = 1; $i < $pagenum+1; $i++) {
            echo "<a href=index.php?page=" . $i . ">" . $i . "</a>";
        }
    }


    function wenzhang(){
        include_once("functiions/database.php");
        getConnection();
        $reuSQL = "select * from news WHERE news_id=\"".$_GET['idd']."\"";
        $reResult = mysql_query($reuSQL);
        while($user = mysql_fetch_array($reResult)){
            echo '<ul id="l">新闻标题：'.$user['news_title'].'</a><br>'.'新闻内容：'.$user['news_content'].'<br>发布时间：'.$user['news_issue_time'].'<br></ul>';
        }
        closeConnection();
    }
}


