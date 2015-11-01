<?php

function my_error_handler($errno, $errstr, $errfile, $errline) {	
	var_dump($errno);
	var_dump($errstr);
	var_dump($errfile);
	var_dump($errline);
}

set_error_handler('my_error_handler');

fread('./a.txt');

?>
