<?php

function at($fn) {
	try {
		// 直接挂了，不会抛出异常
		$fn();
	} catch (Exception $e) {
		return false;	
	}

	return true;
}

echo at(function () {
	fread('a.txt');
});

// @可以阻止fatal error
@require 'a.php';

?>
