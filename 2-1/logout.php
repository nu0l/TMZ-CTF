<?php
#��ʼ�Ự
session_start();
#���session
session_unset();
session_destroy();
#���cookie
setcookie('username','',time()-1);
setcookie('password','',time()-1);

echo '����һ�죬���ǻ��ڴ����ٴ���������';
header('refresh:2,url=login.html');
header('Content-Type:text/html;charset=gbk');
?>
