<?php
//to openfile function takes two parameter (file path, mode)

$file_path="./file.txt";// assign file path to variable


// $handle=fopen($file_path,"r");//open file on read mode and asssign to $handle

// $content=fread($handle,fileSize($file_path)); 

// echo $content;// print content
// fclose($handle);

$handle=fopen($file_path,"w");// open file in write mode

$write_to=fwrite($handle,"Another");

echo $handle;

fclose($handle);



?>