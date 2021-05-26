<?php
#设置内容类型为HTML，字符集uft-8
header('Content-Type:text/html;charset=utf-8');
#开始会话
session_start();

#判断COOKIE是否正确
if(isset($_COOKIE['username'])){
    $username = $_COOKIE['username'];
    $_SESSION['is_login'] = 1;
    #判断是否为登录状态
    if($_SESSION['is_login'] === 1){
        echo "欢迎你，学号：$username 用户</br>";
        echo "<a href=logout.php>注销";

}
}
else{
    echo "对不起，您无权访问此界面，请重新<a href='login.html'>登录</a>";
    exit();
}