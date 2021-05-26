<?php

$IP = '127.0.0.1';
$username = 'root';
$password = 'root';
$database = 'users';

function MysqlConnection($IP,$username,$password,$database)			//数据库连接
{
	$conn = mysqli_connect($IP,
		$username,
		$password
	);
	if(mysqli_errno($conn)){
		echo mysqli_error($conn);
		exit;
	}
	mysqli_select_db($conn,$database);
	mysqli_set_charset($conn,'utf8');
	return $conn;
}

$conn = MysqlConnection($IP,$username,$password,$database);
?>