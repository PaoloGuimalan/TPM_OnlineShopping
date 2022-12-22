<?php
 
    session_start();

    $con = new mysqli("localhost", "root", "", "tpm_database");

    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = mysqli_query($con, "SELECT * FROM admin_acc_reg WHERE admin_email = '$email' && admin_password = '$password'");
    $sqlrow = mysqli_fetch_array($sql);

    if($sqlrow['admin_email'] == $email && $sqlrow['admin_password'] == $password)
    {
    	$_SESSION['admin_acc_id'] = $sqlrow['admin_acc_id'];
    	$_SESSION['admin_id'] = $sqlrow['admin_id'];
    	header("location: admin_index.php");
    }
    else
    {
         header("location: admin.php#");
    }

?>