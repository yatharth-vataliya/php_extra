<?php
namespace {
	 class now{
	 	public static function call_the_hell(){
	 	echo "hell is here :)";
	 }
	 }
	 class hell_to_heaven{
	 	public static function heaven(){
	 		echo "heaven is here :)";
	 	}
	 }

	 function display(string $str){
		echo "display is called of ",$str," from the withoutnamespace";
		}

		echo __NAMESPACE__."hello namespace <br/>";
}
?>
