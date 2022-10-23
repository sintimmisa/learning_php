<?php

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    $data=[$name,$email,$password];

    //openfile 
    $file=fopen('file_data.csv','a');
    
    fputcsv($file,$data);//write to file
    fclose($file);
}else{

    echo "NO DATA";
}

?>