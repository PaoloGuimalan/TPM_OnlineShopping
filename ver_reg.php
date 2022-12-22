<?php

    $con = new mysqli("localhost", "root", "", "tpm_database");

	$account = $_GET['account'];
	$username = $_GET['username'];
    $id = $_GET['acc_id'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    $gender = $_GET['gender'];
    $mobile_num = $_GET['mobile_number'];
    $fname = $_GET['firstname'];
    $lname = $_GET['lastname'];
    $mname = $_GET['middlename'];

    $sql = mysqli_query($con, "INSERT INTO customer_acc_reg (customer_acc_id, customer_id, cust_username, cust_password, cust_email, cust_contactnum, customer_address_id) VALUES ('$account', '$id', '$username', '$password', '$email', '$mobile_num', '$id')");

    $sql_two = mysqli_query($con, "INSERT INTO customer_info_reg (customer_id, cust_firstname, cust_middlename, cust_lastname, gender, date_of_birth, birth_place) VALUES ('$id', '$fname', '$mname', '$lname', '$gender', 'unapplied', 'unapplied')");

    $sql_three = mysqli_query($con, "INSERT INTO customer_address (customer_address_id, house_no, street, barangay, city_town, region) VALUES ('$id', 'unapplied', 'unapplied', 'unapplied', 'unapplied', 'unapplied')");

    if($sql == true && $sql_two == true && $sql_three == true)
    {
    	?>
    	  <script type="text/javascript">
    	  	alert("Registered SuccessfulLy!");
    	  </script>
    	<?php
    	header('location: login.php#');
    }
?>