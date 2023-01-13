<?php
if (isset( $_GET["id"]) and !empty($_GET["id"])){

    require_once "config.php";

    $id=$_GET["id"];
    echo $id;

   $result=mysqli_query($link,"DELETE FROM `bomk` WHERE id='$id'");
    if($result){
        echo "<div class='alert alert-heading ' role='alert'>Record deleted successfully";
        header("location:home.php");
    } else{
        echo "Something went wrong $sql".mysqli_error($link);
    }

} else{

    echo "<div class='alert alert-danger col-md-4' role='alert'>Record id was not fetched</div>";
}
?>


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





















































