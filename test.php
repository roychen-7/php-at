<?php

try {
	mkdir('/Users/roychen/Dev/php-at/logs', 0777);
} catch (Exception $e) {
	var_dump($e);
}


?>
