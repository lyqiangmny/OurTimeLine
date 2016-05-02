<?php
class ImageRec{
	

	private $id;
	private $name;
	private $createTime;
	private $timeRecId;
	private $field01;
	private $field02;
	private $field03;
	private $field04;
	private $field05;
	
	function ImageRec(){}
	
	function setId($id) {
		$this->id = $id;
	}
	function getId() {
		return $this->id;
	}
	
	function setName($name) {
		$this->name = $name;
	}
	function getName() {
		return $this->name;
	}
	
	function setCreateTime($createTime) {
		$this->createTime = $createTime;
	}
	function getCreateTime() {
		return $this->createTime;
	}
	
	function setTimeRecId($timeRecId) {
		$this->timeRecId = $timeRecId;
	}
	function getTimeRecId() {
		return $this->timeRecId;
	}
	
	function setField01($field01) {
		$this->field01 = $field01;
	}
	function getField01() {
		return $this->field01;
	}
	
	function setField02($field02) {
		$this->field02 = $field02;
	}
	function getField02() {
		return $this->field02;
	}
	
	function setField03($field03) {
		$this->field03 = $field03;
	}
	function getField03() {
		return $this->field03;
	}
	
	function setField04($field04) {
		$this->field04 = $field04;
	}
	function getField04() {
		return $this->field04;
	}
	
	function setField05($field05) {
		$this->field05 = $field05;
	}
	function getField05() {
		return $this->field05;
	}
	
	
	
}


?>
