<?php

function err() {
    $file = fopen('a.txt', 'r');
    fread($file, '10');
    fclose($file);
}

try {
    if (!@err()) {
        throw new Exception('Can not open file');
    }
} catch(Exception $e) {
    var_dump($e);
}

?>
