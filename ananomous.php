<?php 
$ananomous=new class{
	public $name="YATHARTH";
	public function display(){
		echo $this->name;
		return "String";
	}
};
var_dump($ananomous->display());

	
?>