<?php
@header('Content-type: text/html;charset=UTF-8');
 //数据库操作类
  class DBUtils{
  	
  	private $conn;
  	
   function DBUtils(){
   	$this->conn = mysqli_connect('localhost','root','root','timerec');
   	if (!$this->conn) {
   		die('Could not connect to MySQL: ' . mysql_error());
   	}
    $this->conn->set_charset("utf8");
   }
   
   
  //查询
   function query($sql){
   	$result = mysqli_query($this->conn, $sql);
    return $result;
   }
   
   
  //插入,修改，删除
   function execute($sql){
      if(mysqli_query($this->conn, $sql)){
        if($this->conn->affected_rows>0){
           return "OK";
        }else{
           return "ERROR";
        }
      }
   }
   
   function close(){
     mysqli_close($this->conn);
   }
   
  }
?>