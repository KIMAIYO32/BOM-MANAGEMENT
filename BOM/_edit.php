<?php
include "config.php";


if (isset($_POST["id"]) and !empty($_POST["id"])){

    //get the hidden input value

    $id=$_POST["id"];

    $idno = $row["idno"];
    $firstname = $row["firstname"];
    $lastname = $row["lastname"];
    $phonenumber = $row["pnumber"];
    $email = $row["email"];
    $academic = $row["academic"];
    $current = $row["current"];


  $sql="UPDATE `bomk` SET idno=' $idno',firstname='$firstname',lastname='$lastname ',pnumber='$phonenumber',
email='$email',academic='$academic',current=' $current' WHERE id='$id'";

    $result=mysqli_query($link,$sql);

    if ($result){
        echo "<div class='alert alert-success' role='alert'>Record updated successfully</div>";
          header("location:home.php");

    }else{

        echo "Error executing query $sql".mysqli_error($link);
    }


}else{

    // fetch id parameter

    if (isset($_GET["id"]) and !empty(trim($_GET["id"]))){
     $id=trim($_GET["id"]);

        //sql

        $sql="SELECT * FROM `bomk` WHERE id='$id'";

        $result=mysqli_query($link,$sql);
        if ($result){
            if (mysqli_num_rows($result)==1){
                $row=mysqli_fetch_array($result);

                $firstname = $row["firstname"];
                $lastname = $row["lastname"];
                $phonenumber = $row["pnumber"];
                $email = $row["email"];
                $academic = $row["academic"];
                $current = $row["current"];
                


            } else{

                echo "no data found in the database";
            }


        }else{

            echo "error executing query $sql".mysqli_error($link);
        }




    }else{

        echo "id not fetched in the url";
    }



}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1.0" name="viewport">

    <title>UPDATE BOM</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.js"> </script></head>
<body>

<div class="container-fluid">
    <div class="p-3">
        <nav aria-label="breadcrumb" style="background-color: lightgrey; padding-top: 10px;">
           <div class="text-center p-2">
            <h4>UPDATE BOM </h4>
            <p>Please fill this form to update bom members </p>
        </nav>

    </div>

<div class="row">

    <div class="col-md-3 ">
        <div class="p-3">
            <img src="images/zeta.png" alt="" height="200" width="200">
        </div>
        <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="welcome.php">Dashboard</a></li>
        
        </ul>
    </div>


    <div class="col-md-8">
<form action="handbom.php" method="post" enctype="multipart/form-data">
<div class="row p-2">
<div class="col">
    
    <label >ID NO</label>
        <input type="text" class="form-control" name="idno" placeholder="ENTER ID NO">
</div>
    <div class="col">
    
        <label for="exampleInputEmail1" class="form-label">FIRST NAME</label>
            <input type="text" class="form-control" name="firstname" placeholder="Enter first Name">
    </div>
    <div class="col">
        <label> LAST NAME</label>
          <input type="text" class="form-control" name="lastname" placeholder="Enter your last Name">
       </div>
       

<div class="row p-2">
 <div class="col">
        <label>PHONE NUMBER</label>
            <input type="text" class="form-control" name="phonenumber" placeholder="Enter Phone number">
        
    </div>
    <div class="col">
        <label>EMAIL ADRESS</label>
            <input type="text" class="form-control" name="email" placeholder="y@example.com">

        
 
   

</div>

    <div class="row p-2 ">
        <div class="col">
            <label>Academic Qulification</label>
                <select name="academic" class="form-select form-control" >
                    <option value="certificate">certificate(o-level/A-level)</option>
                    <option value="diploma">Intermediate </option>
                    <option value="higher">Advance/Higher diploma </option>
                    <option value="degree">degree </option>
                    <option value="posta graduate">post graduate diploma</option>
                    <option value="masters">masters </option>
                    <option value="doctorate">doctorate/phd </option>

             </select>
            
        </div>

        <div class="col">
        <label>current professional</label>
            <input type="text" class="form-control" name="current" placeholder="example- farmer">
        
</div>
   

        <div class="row">
            <input type="hidden" name="id" value="<? echo $id;?>">
            <button class="btn btn-danger col-md-3" name="uploaddata" type="submit">UPDATE</button>
            <a href="home.php" class="btn btn-outline-danger">CANCEL</a>

        </div>



    </form>
</div>

</body>
</html>
