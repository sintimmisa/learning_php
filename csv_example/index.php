<?php

//Declaration of Variables
$error='';
$name='';
$email='';
$mobile='';
$subject='';
$message='';

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
            $error .='<p><label class="text-danger">Please enter name</label></p>';
        }

        else{
            $name=clean_text($_POST['name']);

            if(!preg_match('/^[a-zA-Z]*$/',$name)){
                    $error .='<p><label class="text-danger">Only letter and whitespaces</label></p>';
            }
        }



        if(empty($_POST['email'])){
            $error .='<p><label class="text-danger">Please enter email</label></p>';
        }

        else{
            $email=clean_text($_POST['email']);

            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $error .='<p><label class="text-danger">Please enter valid email</label></p>';
            }
        }



        //subject line
        if(empty($_POST['subject'])){
            $error .='<p><label class="text-danger">Please enter subject</label></p>';
        }

        else{
            $subject=clean_text($_POST['subject']);

           
        }
        //mobile
        if(empty($_POST['mobile'])){
            $error .='<p><label class="text-danger">Please enter mobile</label></p>';
        }

        else{
            $mobile=clean_text($_POST['mobile']);

            
        }

        //message 

        if(empty($_POST['message'])){
            $error .='<p><label class="text-danger">Please enter message</label></p>';
        }

        else{
            $message=clean_text($_POST['message']);

           

            if($error==''){
                $file_open=fopen("contact_data.csv","a");
                $no_rows=count(file("contact_data.csv"));

                if($no_row >1){
                    $no_rows=($no_row-1) + 1;
                }

                $form_data = array(
                    'sr_no'=>$no_row,
                    'name'=>$name,
                    'email'=>$email, 
                    'subject'=>$subject,
                    'message'=>$message,
                    'mobile'=>$mobile
                );  

                fputcsv($file_open,$form_data);

                $error ='<label class="text-success">Data stored</label>';
                print $error;
                $name='';
$email='';
$mobile='';
$subject='';
$message='';
            }
        }
}


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>CSV Example</title>
</head>
<body>

<div class="container">
   
<form method="POST" action="">
<h2>Contact Form</h2>
<p>Kindly contact us by filling the form below:</p>
<?php echo $error;?>
        <div class="form-group">
        <label for="name">Enter Name:</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name">
        </div>
        <div class="form-group">
        <label for="email">Emter Email:</label>
        <input type="email" name="email" placeholder="Enter email" class="form-control">
        </div>
        <div class="form-group">
        <label for="subject">Enter Subject:</label>
        <input type="text" name="subject" placeholder="Subject" class="form-control">
        </div>
        <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="text" name="mobile" class="form-control" placeholder="Mobile">

        </div>
        <div class="form-group">
        <label for="message">Message:</label>

        <textarea id="msg" name="message" class="form-control" placeholder="Message"></textarea>
        </div>

        <input type="submit" name="submit"value="Submit">
    </form>

</div>
    
</body>
</html>