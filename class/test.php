<?php
  require_once "BizUtils.php";
   /*$sql="select * from m_student";
   $util=new DBUtil();
   $result=$util->query($sql);
   while($row=$result->fetch_assoc()){
   	 echo "$row[stuName]"."</br>";
   }
   $result->free();
   $util->close();*/
   
   $util=new BizUtils();
   //$util->saveImageRec('vvvv', '2016-3-1', '5');
   
   $upload_dir = '../files/'; // 保存上传文件的目录
   $uuname = '0f6cc73d-256c-3ee6-8b38-74b3d4d400d6.png';
   $util ->img_create_small($upload_dir . $uuname, 60, 60, $upload_dir.'slt'.$uuname);
    
   
  // $util->getYears();
  
  /*   $arr = $util->getTimeRecs(null,'2015');
   
   for($i=0;$i<count($arr);$i++){
   	$timeRec = $arr[$i];
   	echo $timeRec->getDate();
   	/* $images = $timeRec->getImages();
   	
   	foreach ($images as $ele){
   		echo $ele->getName();
   	}
   	 */
   	
  /*  	echo '    '; 
   	
   	
   }  */
   
  /*  $d = strtotime('20150122');
   echo '00 '.date('Y-m-d',$d); */
   
?>