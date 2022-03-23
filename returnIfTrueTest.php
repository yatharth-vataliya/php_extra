<?php

function thing($value = true) {
	// below line will generate syntax error and stop execution of script
	return true if $value;
}

var_dump(thing());

var_dump(thing(false));
