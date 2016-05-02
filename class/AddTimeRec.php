<?php

@header('Content-type: text/html;charset=UTF-8');

$date = $_POST["date"];
$address = $_POST["address"];
$title = $_POST["title"];
$content = $_POST["content"];
$author = $_POST["author"];


/* $date = '20160302';
$address = '����';
$title = 'CCCC';
$content = 'ABBBB';
$author = 'lyqiang';
 */


 if($date==null || $date == "" || $title == null || $title == "" || $content == null || $content == "" || $author == null || $author == ""){
	header("Location:../view/main.php?errinfo=Error:Something_Is_Null");
	//ȷ���ض���󣬺������벻�ᱻִ��
	exit;
}
    
    require_once "BizUtils.php";
    $util=new BizUtils();
    $d = strtotime($date);
    $year = date('Y',$d);
    
    
    
    $util->saveTimeRec($year, $date, $address, $title, $content, '0', $author, date('Y-m-d H:i:s'));
    
    $fileArray = $_FILES['upload_file']; // ��ȡ����ļ�����Ϣ��ע�⣺����ļ���������[]
	if (count($fileArray)>0) {
		// ����ͼƬ
		$arr = $util->getMaxId ();
		$maxId = $arr [0];
	
		$upload_dir = '../files/'; // �����ϴ��ļ���Ŀ¼
		foreach ( $fileArray ['error'] as $key => $error ) {
			if ($error == UPLOAD_ERR_OK) { // PHP����UPLOAD_ERR_OK=0����ʾ�ϴ�û�г���
				$temp_name = $fileArray ['tmp_name'] [$key];
				$file_name = $fileArray ['name'] [$key];
				$suff = explode ( '.', $file_name );
				$uuname = $util->uuid () . '.' . $suff [1];
				move_uploaded_file ( $temp_name, $upload_dir.$uuname );
				$util->saveImageRec ( $uuname, date ( 'Y-m-d H:i:s' ), $maxId );
				
				//��������ͼ
			//	$util ->img_create_small($upload_dir.$uuname, 60, 60, $upload_dir.'slt'.$uuname);
			} else {
				header ( "Location:../view/main.php" );
				exit ();
			}
		}
	}
    $util->closeDbCon();
    header ( "Location:../view/main.php?errinfo=SUCCESS" );
    //header("Location:../view/index.php");
    
?>