<?php

class DemoClass {
	public string $name = 'yatharth';
	public string $city = 'kalavad';
	public int $contact = 8758721807;
	// public integer $contact = 8758721807;  // this will through error so write int instead of integer because as php compiler integer have no default initilization but int have;

	public function display() : string {
		return __FUNCTION__;
	}

	public static function __() : string {
		return __CLASS__;
	}

	public function _(){
		// $this['one'] = 'Nothing'; it will generate error and end script execution if you want to use this functionality you have implement ArrayAccess interface with all of it's methods
		echo $this->name;
	}

	public function Demo(){
		return $this;
	}

}

class NemoClass{
	public $ram = '8 GB';
	public $cpu = 'i5';
	public $gpu = 'nvidia';

	public function Nemo(){
		echo __CLASS__;
	}

	public function NemoThis(){
		$this &= (new DemoClass)->Demo();
		return $this;
	}
}

$demo = new DemoClass();

$demo->_();

var_dump((new NemoClass)->NemoThis());
?>
