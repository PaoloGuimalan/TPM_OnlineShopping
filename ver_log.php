<?php

	session_start();

    $con = new mysqli("localhost", "root", "", "tpm_database");

    $email = $_GET['email'];
    $password = $_GET['password'];

    $sql = mysqli_query($con, "SELECT * FROM customer_acc_reg WHERE cust_email = '$email' && cust_password = '$password'");
    $sqlrow = mysqli_fetch_array($sql);

    if($sqlrow['cust_email'] == $email && $sqlrow['cust_password'] == $password)
    {
    	$_SESSION['acc_id'] = $sqlrow['customer_acc_id'];
    	$_SESSION['info_id'] = $sqlrow['customer_id'];
    	$_SESSION['address_id'] = $sqlrow['customer_address_id'];
    	header("location: index.php");
    }
    else
    {
         $_SESSION['warn'] = true;
         header("location: login.php#");
    }

?>