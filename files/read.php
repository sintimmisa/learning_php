<?php

$file_name ="./file.txt";
$handle =fopen($file_name,"r");
$content=fread($handle,filesize($file_name));


echo $content;



?>