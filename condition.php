<?php
$name =  'everthing';
// if($name == 'yatharth' || 'everthing' || 'something') // not valid with any operator
if($name == 'yatharth' || $name == 'nothing' || $name == 'something')
  echo $name."\n";
else echo "No Match";
echo "\n";
if(FALSE !== True):
   echo "condition TRUE \n";
else:
  echo "condition FALSE \n";
endif;

$a = 10;
$b = 12;
$c = 13;

if($a > $b == $c){
	echo "True part is run";
}else{
	echo "False part is run";
}


 ?>
