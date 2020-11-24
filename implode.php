<?php

$array = array('lastname', 'email', 'phone','yatharth','vataliya','nothing','well','Hello');
// $comma_separated = "'".implode("','", $array)."'";

// echo $comma_separated; // lastname,email,phone
echo sprintf("select * from group_member where group_id in '%s'",implode("','",$array));
// Empty string when using an empty array:
// var_dump(implode('hello', array())); // string(0) ""

?> 