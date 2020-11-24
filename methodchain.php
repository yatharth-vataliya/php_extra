<?php

class main{
	public $ref;
	public $firstname="VATALIYA";
	public function returnref(){
		return $this;
	}

}
class chain{
	public $catch;
	public $name="YATHARTH";
	public function __construct(){
		$main=new main();
		// global $catch; // this logic is not work in class and object 
		$this->catch=$main;	
	}
	public function name(){
		echo "name";
	}
	
}

$chain=new chain();
// var_dump($chain->catch);
echo $chain->catch->firstname;
echo $chain->catch->returnref()->firstname;
?>