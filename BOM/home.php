<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery.min.js"></script>

</head>
</head>
<body>

<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">

    </a>
    </div>

            <ul class="nav flex-column">
         <li class="nav-item"><a class="nav-link active" aria-current="page" href="welcome.php">CLICK BACK</a></li>
            
            </ul>
        </div>
  </div>
</nav>
</div>
 <ul class="nav flex-column">
         <body>

<div class="container-fluid">
    <div class="p-3">
        
        <nav aria-label="breadcrumb" style="background-color: lightgrey; padding-top: 10px;">
           <div class="text-center p-2">
            <h4>ADD BOM MEMBERS</h4>
            <p>Please fill this form to add bom members </p>
        </nav>

    </div>



<div class="col-md-8">
<form action="handlestudent.php" method="post" enctype="multipart/form-data">
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
        <div class="col">
        <label> upload cv</label>
          <input type="file" class="form-control" name="file" placeholder="Enter your last Name">
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

<div class="col">
        <label>GENDER</label>

            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
       

</div>
<div class="col">
    <label>DATE OF BIRTH</label>
        <input type="date" class="form-control" name="dob" >
  
</div>    

    <div class="row p-2 ">
        <button class="btn btn-outline-primary col-md-3 text-center" name="uploaddata" type="submit">ADD BOM</button>

    </div>



</form>
</div>
</div>
</div>
</div>

</body>
<div class="bg-success p-2 text-white bg-opacity-75">THE BOM MEMBERS</div>

    <?php

    require "config.php";
    ?>


        
          <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Id no</th>
                    <th>First Name</th>
                    <th>last Name</th>
                    <th>Phone Number</th>
                    <th> EMAIL</th>
                    <th>ACADEMIC QULIFICATION</th>
                    <th>CURRENT PROFESSIONAL</th>
                    <th>VIEW</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                    // select query
   

    $result = mysqli_query($link, "select *from bomk");


                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row[ 'idno'] . "</td>";
                    echo "<td>" . $row['firstname'] . "</td>";
                    echo "<td>" . $row['lastname'] . "</td>";
                    echo "<td>" . $row['pnumber'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['academic'] . "</td>";
                    echo "<td>" . $row['current'] . "</td>";

                    echo "<td><a href='_view.php?id=".$row['id']." '><span class='fa fa-eye'></span></a></td>";
                    echo "<td><a href='_edit.php?id=".$row['id']."'><span class='fa fa-pencil'></span></a></td>";
                    echo "<td><a href='_delete.php?id=".$row['id']."'><span class='fa fa-trash'></span></a></td>";
                 

                } ?>


                </tbody>


            </table>
    

    
 
    </div>
</div>
</body>
</html>




