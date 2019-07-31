<?php
include("config.php");

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
echo "$id $name $email";

$sq = "INSERT INTO patient(id, name, email) VALUES('$id', '$name', '$email')";
$rees = mysqli_query($myconn, $sq);
if($rees){
    echo "data added succeessfully";
} else {
    echo "error! data is not added ".mysqli_error($myconn);
}

?>