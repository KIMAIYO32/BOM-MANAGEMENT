<?php


if (isset($_GET["id"]) and !empty(trim($_GET["id"]))) {
    require_once "config.php";
    $id = $_GET["id"];
    $sql = "SELECT * FROM `bomk` WHERE id='$id'";
    $result = mysqli_query($link, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_array($result);
            $idno = $row["idno"];
            $firstname = $row["firstname"];
            $lastname = $row["lastname"];
            $phonenumber = $row["pnumber"];
            $email = $row["email"];
            $academic = $row["academic"];
            $current = $row["current"];

        } else {
            echo "<div class='alert alert-heading ' role='alert'>No data record in the database</div>";
        }

    } else {

        echo "Error quering $sql" . mysqli_error($link);
    }

} else {

    echo "ID parameter not fetched";
}

?>

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
<div class="container m-3">
    <div class="row">
        <div class="text-center">

            <h3>View Record</h3>
        
            <div>
                <label class="h6">ID NO</label>
                <p> <? echo  $idno; ?></p>
            </div>
            <div>
                <label class="h5">FIRSTNAME</label>
                <p> <? echo  $firstname; ?></p>
            </div>
            <div>
                <label class="h5">LASTNAME</label>
                <p> <? echo  $lastname; ?></p>
            </div>
            <div>
                <label class="h5">PHONE NUMBER</label>
                <p> <? echo $phonenumber; ?></p>
            </div>

        
            <div>
                <label class="h5">DATE</label>
                <p> <? echo $dob; ?></p>
            </div>

            <div>
                <label class="h5">ACADEMIC QULIFICATION</label>
                <p> <? echo  $academic; ?></p>
            </div>
            <div>
                <label class="h5">CURRENT OCCUPATION</label>
                <p> <? echo $current; ?></p>
            </div>
        


</div>
</body>
</html>































