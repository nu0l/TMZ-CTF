<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>check</title>
</head>
<div style="position: absolute;bottom: 0;width: 99%;"><p align="center" style="font:italic 15px Georgia,serif;color:white;">nu0l</p></div>
<?php
include 'connection.php';

function LoginCheck(){
	if (isset($_REQUEST['username']) && isset($_REQUEST['password']) && !empty($_REQUEST['username']) && !empty($_REQUEST['password'])){
		$username = trim(@$_REQUEST['username']);
		$password = trim(@$_REQUEST['password']);
		if (empty($username) || empty($password)) {
			echo"				
				<body background='./image/background.jpg' style='background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;'>
					<br><br><br>
					<h1 style='font-family:verdana;color:red;text-align:center;font-size:40px;'>没有参数</h1>
				</body>
				";
			exit();
		}
	}
	else{
		echo"				
				<body background='./image/background.jpg' style='background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;'>
					<br><br><br>
					<h1 style='font-family:verdana;color:red;text-align:center;font-size:40px;'>请输入用户名密码d</h1>
				</body>
			";
		exit();
	}
	$check_list = '/asdrgerhasd|adsadaegeg/i';
	if(preg_match($check_list, $username) || preg_match($check_list, $password)){
		die("
			<body background='./image/background.jpg' style='background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;'>
				<br><br><br>
				<h1 style='font-family:verdana;color:red;text-align:center;font-size:40px;'>NO HACKER!</h1>
				</br>
			</body>
			");
	}
	return array($username,$password);
}


function MysqlSelect($conn,$data)
{
	$sql = "select * from user where username='".$data[0]."' and password='".$data[1]."'";
	$result = mysqli_query($conn,$sql);
	if ($result) {
		$row = mysqli_fetch_assoc($result);
		if ($row) {
			echo "
				<body background='./image/background.jpg' style='background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;'>
					<br><br><br>
					<h1 style='font-family:verdana;color:red;text-align:center;'>Login Success!</h1><br><br><br>
					</br>
					<p style='font-family:arial;color:#ffffff;font-size:30px;left:650px;position:absolute;'>Hello ".$row['username']."！</p>"."</br></br>
					<p style='font-family:arial;color:#ffffff;font-size:30px;left:650px;position:absolute;'>flag{he-yi-wei-chun}</p>
				</body>
				";
		}else{
			echo "
				<body background='./image/background.jpg' style='background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;'>
					<br><br><br>
					<h1 style='font-family:verdana;color:red;text-align:center;font-size:70px;'>用户名或密码错误</h1>
				</body>
				";
		}
	}else {
		echo"				
			<body background='./image/background.jpg' style='background-repeat:no-repeat ;background-size:100% 100%; background-attachment: fixed;'>
				<br><br><br>
				<h1 style='font-family:verdana;color:#ffffff;text-align:center;font-size:15px'>
				".
				mysqli_error($conn)
				."</h1>
			</body>";
	}
}


$data = LoginCheck();
MysqlSelect($conn,$data);
?>
</html>
