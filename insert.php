<?php
$name     = $_POST['name'];
$email    = $_POST['email'];
$country  = $_POST['country'];
$password = $_POST['pass1'];

include_once('config.php');
$objDB = mysqli_select_db($conn, "id9725330_ajaxbchatdb")  or die(mysqli_error($conn));
$strSQL = "INSERT INTO user ";
$strSQL .="(user_id,user_name,user_email,user_country,user_password,user_status) ";
$strSQL .="VALUES ";
$strSQL .="('".NULL."','".$name."','".$email."' ";
$strSQL .=",'".$country."','".$password."','0') ";
$objQuery = mysqli_query($conn,$strSQL);

if ($objQuery) {
    header('location: practice.php?registeration_successfull=<span style="color:green">You have successfully registered. You can now login.</span>');
} else {
    echo "failed";
}

?>