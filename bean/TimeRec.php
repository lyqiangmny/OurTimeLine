<?php
/**
 * @author lyqiangmny
 *
 */
class TimeRec{
	
	private $id;
	private $year;
	private $date;
	private $address;
	private $title;
	private $content;
	private $images;
	private $isPublic;
	private $author;
	private $createTime;
	private $field01;
	private $field02;
	private $field03;
	private $field04;
	private $field05;
	
	function TimeRec(){}
	
	function setId($id){
		$this->id = $id;
	}
	
	function getId(){
		return $this->id;
	}
	
	function setYear($year){
		$this->year = $year;
	}
	
	function getYear(){
		return $this->year;
	}
	
	function setDate($date){
		$this->date = $date;
	}
	
	function getDate(){
		return $this->date;
	}
	
	function setAddress($address){
		$this->address = $address;
	}
	
	function getAddress(){
		return $this->address;
	}
	
	
	function setTitle($title) {
		$this->title = $title;
	}
	function getTitle() {
		return $this->title;
	}
	
	function setContent($content) {
		$this->content = $content;
	}
	function getContent() {
		return $this->content;
	}
	
	function setImages($images) {
		$this->images = $images;
	}
	function getImages() {
		return $this->images;
	}
	
	function setIsPublic($isPublic) {
		$this->isPublic = $isPublic;
	}
	function getIsPublic() {
		return $this->isPublic;
	}
	
	function setAuthor($author) {
		$this->author = $author;
	}
	function getAuthor() {
		return $this->author;
	}
	
	function setCreateTime($createTime) {
		$this->createTime = $createTime;
	}
	function getCreateTime() {
		return $this->createTime;
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