<?php
include "config.php";
if (isset($_POST)){

   $idno= $_POST['idno'];
   $firstname= $_POST['firstname'];
   $lastname= $_POST['lastname'];
   $phonenumber= $_POST['phonenumber'];
   $email=$_POST['email'];
   $academic=$_POST['academic'];
   $current=$_POST['current'];






   

 $sql="INSERT INTO `bomk`(`idno`, `firstname`, `lastname`, `pnumber`, `email`, `academic`, 
 `current`) 
  VALUES ('$idno','$firstname', '$lastname','$phonenumber','$email',
    '$academic','$current')";


  

  $result=mysqli_query($link,$sql);



  if ($result){
      echo "Your Upload was successful";
      header("Location:home.php");
  } else{

      echo "Upload data Error $sql".mysqli_error($link);
  }



}
