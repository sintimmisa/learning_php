<?php
$file_name="./file.txt";
$handle=fopen($file_name,"a");

$msg=fwrite($handle,"Good \n");

$file_csv="./file.csv";
$handle2=fopen($file_csv,"a");

$msg2=fwrite($handle2,"Save this")



?>