<?php

function err() {
    throw new Exception('Can not open file');
}

try {
    err();
} catch(Exception $e) {
    var_dump($e);
}

?>
