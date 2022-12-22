<?php

   $con = new mysqli("localhost", "root", "", "tpm_database");

    $account = $_GET['account'];
    $id = $_GET['acc_id'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $department = $_GET['department'];
    $fname = $_GET['firstname'];
    $lname = $_GET['lastname'];
    $mname = $_GET['middlename'];


    $sql = mysqli_query($con, "INSERT INTO admin_acc_reg (admin_acc_id, admin_id, admin_email, admin_password) VALUES ('$account', '$id', '$email', '$password')");

    $sql_two = mysqli_query($con, "INSERT INTO admin_info_reg (admin_id, admin_firstname, admin_middlename, admin_lastname, admin_type) VALUES ('$id', '$fname', '$mname', '$lname', '$department')");

    if($sql == true && $sql_two == true)
    {
    	?>
    	<script>
    		alert("Registered Successfully!");
    	</script>
    	<?php
    	header("location: admin.php");
    }

?>