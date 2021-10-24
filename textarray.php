<?php
$file = fopen("ordeid.txt", "r");
$members = array();

while (!feof($file)) {
   $members[] = fgets($file);
}

fclose($file);

//var_dump($members);
echo trim(join(',',$members));
?>