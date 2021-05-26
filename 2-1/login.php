<?php
#包含mysql_config信息
include('conf.php');
#设置内容类型为HTML,字符集为UTF-8
header('Content-Type:text/html;charset=utf-8');
#开始会话
session_start();

#判断是否有值传入
if(isset($_POST['login'])){
    #将输入的用户名与密码赋值
    $username = (isset($_POST['username'])?trim($_POST['username']):die('用户名为空'));
    $password = (isset($_POST['username'])?trim($_POST['password']):die('密码为空'));
    $username = preg_replace('/ /','',$username);
    $password = preg_replace('/ /','',$password);


}

    #连接数据库
    $mysqli = @mysqli_connect('localhost','root','123456','mydb');

    #判断数据库是否连接正常
    if($mysqli){
        #数据库查询
        $con = $mysqli->query("select * from user where username='{$username}' and password='{$password}';");
        #返回记录数
        $conn = $con->num_rows;
        mysqli_close($mysqli);

        #判断用户名、密码是否正确
        if($conn > 0){
            $_SESSION['username'] = $username;
            $_SESSION['is_login'] = 1;

            #判断是否选择7天内免登录
            if($_POST['remember']){
                setcookie('username',$username,time()+3600*24);
                setcookie('password',md5($username.md5($password)),time()+3600*24);
            } 
            #销毁cookie
            else{
                setcookie('username','',time()-1);
                setcookie('password','',time()-1);
                setcookie('username',$username,time()+3600);
                setcookie('password',md5($username.md5($password)),time()+3600);
            }
            #跳转到index.php
            header('refresh:0,url=index.php');
        }
        else{
            die('用户名或密码错误');
        }
    }
    else{
        die('数据库连接失败，请检查conf文件');
    }
}
else{
    exit();
}