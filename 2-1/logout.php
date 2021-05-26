<?php
#开始会话
session_start();
#清除session
session_unset();
session_destroy();
#清除cookie
setcookie('username','',time()-1);
setcookie('password','',time()-1);

echo '总有一天，我们会在春天再次遇见……';
header('refresh:2,url=login.html');
header('Content-Type:text/html;charset=gbk');
?>
