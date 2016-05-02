<?php
@header('Content-type: text/html;charset=UTF-8');
//ҵ�������
class BizUtils{
	
	private $dbUtils;
	
	
	function BizUtils(){
		include('DBUtils.php');
		include('bean/TimeRec.php');
		include('bean/ImageRec.php');
		$this->dbUtils = $this->newDBUtil();
	}
	
	function newDBUtil(){
		$db=new DBUtils();
		return $db;
	}
	
	function newTimeRec(){
		$timeRec=new TimeRec();
		return $timeRec;
	}
	
	function newImageRec(){
		$imageRec=new ImageRec();
		return $imageRec;
	}
	
	/**
	 * ��ȡ��� ����
	 */
	function getYears(){
		$sql = "select distinct year from timerec order by year desc";
		$result = $this->dbUtils->query($sql);
		$arr = array();
		while( $row = mysqli_fetch_assoc($result) ){ 
		    $arr[] = $row['year'];
		}
		//ע����������ͷ��ڴ�
		mysqli_free_result($result);
		return $arr;
	}
	
	/**
	 * ������� ��ȡ��¼��������
	 * @param unknown $isPublic
	 * @param unknown $year
	 */
	function getTimeRecs($isPublic,$year) {
		$sql = "select * from timerec where 1=1";
		if($isPublic!=null && ""!=$isPublic){
			$sql = $sql." and ispublic = '".$isPublic."'";
		}
		if($year!=null && ""!=$year){
			$sql = $sql." and year = '".$year."'";
		}
		$sql = $sql." order by date desc" ;
		$result = $this->dbUtils->query($sql);
		$arr = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$timeRec = $this->newTimeRec();
			$timeRec->setId($row['id']);
			$timeRec->setYear($row['year']);
			/* $d = strtotime($row['date']);
			$date = date('Y',$d).'-'.date('m',$d).'-'.date('d',$d); */
			$timeRec->setDate($row['date']);
			$timeRec->setAddress($row['address']);
			$timeRec->setTitle($row['title']);
			$timeRec->setContent($row['content']);
			$timeRec->setImages($this->getImages($timeRec->getId()));
			$timeRec->setIsPublic($row['isPublic']);
			$timeRec->setAuthor($row['author']);
			$timeRec->setCreateTime($row['createTime']);
			$arr[] = $timeRec;
		}
		mysqli_free_result($result);
		return $arr;
	} 
	
	
	function getImages($timeRecId){
		$sql = "select * from imagerec where timerecid =".$timeRecId;
		$result = $this->dbUtils->query($sql);
		$arr = array();
		while( $row = mysqli_fetch_assoc($result) ){
			$imageRec = $this->newImageRec();
			$imageRec->setId($row['id']);
			$imageRec->setName($row['name']);
			$imageRec->setCreateTime($row['createTime']);
			$imageRec->setTimeRecId($row['timeRecId']);
			$arr[] = $imageRec;
		}
		mysqli_free_result($result);
		return $arr;
	}
	

	/***
	 * ��ȡid���ֵ
	 * @return unknown
	 */
	function getMaxId(){
		$sql = "select max(id) from timerec where 1=1";
		$result = $this->dbUtils->query($sql);
		$arr = mysqli_fetch_row($result);
		//ע����������ͷ��ڴ�
		//mysqli_free_result($result);
		return $arr;
	}
	
	
	/***
	 * ����TimeRec
	 * @param unknown $year
	 * @param unknown $date
	 * @param unknown $address
	 * @param unknown $title
	 * @param unknown $content
	 * @param unknown $isPublic
	 * @param unknown $author
	 * @param unknown $createTime
	 */
	function saveTimeRec($year,$date,$address,$title,$content,$isPublic,$author,$createTime) {
		$sql = "insert into timerec (year,date,address,title,content,isPublic,author,createTime) "."values('".$year."','".$date."','".$address."','".$title."','".$content."','".$isPublic."','".$author."','".$createTime."')";
		$result = $this->dbUtils->execute($sql);		
		return $result;
	}
	
	/***
	 * ����ImageRec
	 * @param unknown $name
	 * @param unknown $createTime
	 * @param unknown $timeRecId
	 * @return string
	 */
	function saveImageRec($name,$createTime,$timeRecId) {
		$sql = "insert into imagerec (name,createTime,timeRecId) values('".$name."','".$createTime."','".$timeRecId."') ";
		echo $sql;
		$result = $this->dbUtils->execute($sql);
		return $result;
	}
	
	//�ǵùر�����
	function closeDbCon(){
		$this->dbUtils->close();
	}
	
	/***
	 * UUID
	 * @param string $prefix
	 * @return string
	 */
	function uuid($prefix = '')
	{
		$chars = md5(uniqid(mt_rand(), true));
		$uuid  = substr($chars,0,8) . '-';
		$uuid .= substr($chars,8,4) . '-';
		$uuid .= substr($chars,12,4) . '-';
		$uuid .= substr($chars,16,4) . '-';
		$uuid .= substr($chars,20,12);
		return $prefix . $uuid;
	}
	
	
	/***
	 * 
	 * @param unknown $big_img
	 * @param unknown $width
	 * @param unknown $height
	 * @param unknown $small_img
	 */
	
	function img_create_small($big_img, $width, $height, $small_img) { // ԭʼ��ͼ��ַ������ͼ��ȣ��߶ȣ�����ͼ��ַ
		$imgage = getimagesize ( $big_img ); // �õ�ԭʼ��ͼƬ
		switch ($imgage [2]) { // ͼ�������ж�
			case 1 :
				$im = imagecreatefromgif ( $big_img );
				break;
			case 2 :
				$im = imagecreatefromjpeg ( $big_img );
				break;
			case 3 :
				$im = imagecreatefrompng ( $big_img );
				break;
		}
		$src_W = $imgage [0]; // ��ȡ��ͼƬ���
		$src_H = $imgage [1]; // ��ȡ��ͼƬ�߶�
		$tn = imagecreatetruecolor ( $width, $height ); // ��������ͼ
		imagecopyresampled ( $tn, $im, 0, 0, 0, 0, $width, $height, $src_W, $src_H ); // ����ͼ�񲢸ı��С
		imagejpeg ( $tn, $small_img ); // ���ͼ��
	}
	
}
?>