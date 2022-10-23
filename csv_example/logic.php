<?php

//Declaration of Variables
$error="";
$name="";
$email="";
$mobil="";
$subject="";
$message="";

//function to clear text fields

function clean_text($string){
        $string=trim($string);
        $string=stripslashes($string);
        $string=htmlspecialchars($string);

        return $string;

}

//condition
if(isset($_POST['submit'])){
        if(empty($_POST['name'])){
            $error .='<p class="text-danger">Please enter name</p>';
        }
}
else{}