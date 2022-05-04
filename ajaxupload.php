<?php


include('connection.php');


if(!empty($_FILES["file"]["name"]))
{



  $target_dir = "upload/";
  $target_file= $_FILES["file"]["name"];
 

  
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
 if (move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)) {
 
          $first_name=$_POST['fname'];
          $last_name=$_POST['lname'];
          $email=$_POST['email'];
          $password=password_hash($_POST['psw'], PASSWORD_DEFAULT);
          $image=$_FILES["file"]["name"];
          $created_at=date('Y-m-d');

         $insert=mysqli_query($conn,"INSERT INTO users(first_name,last_name,email,password,image,created_at)VALUES('$first_name','$last_name','$email','$password','$image','$created_at')");

         if($insert)
         {
         	echo "1";
         }
         else
         {
         	echo "0";
         }

        
       } else {
    echo "2";
  }

}
 










?>