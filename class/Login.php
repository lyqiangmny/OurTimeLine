<?php
@header('Content-type: text/html;charset=UTF-8');

$username = $_POST["username"];
$password = $_POST["password"];

 if($username==null || $username == "" || $password == null || $password == ""){
	header("Location:../view/login.php?errinfo=name_OR_password_Is_Null");
	//确保重定向后，后续代码不会被执行
	exit;
}

require_once "../class/DBUtils.php";
$dbUtils = new DBUtils();
$sql = 'select 1 from user where 1 = 1 and name =\''.$username.'\' and password = \''.$password.'\'';
$result = $dbUtils ->query($sql);
if(mysqli_num_rows($result)!=1){
	header("Location:../view/login.php?errinfo=name_OR_password_Is_Wrong");
	mysqli_free_result($result);
	$dbUtils ->close();
	exit;
}else{
	Session_start(); //使用SESSION前必须调用该函数。
	$_SESSION['name']= $username ; //注册一个SESSION变量
	mysqli_free_result($result);
	$dbUtils ->close();
	header("Location:../view/main.php");
	exit;
}
	
	
?>

