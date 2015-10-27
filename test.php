<?php

try {
    $file = @fopen('a.txt', 'r');
    if ($file) {
        fread($file, '10');
        fclose($file);
    } else {
        throw new Exception('Can not open file');
    }
} catch(Exception $e) {
    var_dump($e);
}

?>
