<?php

      session_start();

      $con = new mysqli("localhost", "root", "", "tpm_database");

      $command_number = $_GET['command_number'];

      $customer_address_id = $_GET['customer_address_id'];

      $house_no = $_GET['house_no'];
      $street = $_GET['street'];
      $barangay = $_GET['barangay'];
      $city_town = $_GET['city_town'];
      $region = $_GET['region'];


      if ($command_number == 1) {
      	        
      	        $sql = mysqli_query($con, "UPDATE customer_address SET house_no = '$house_no', street = '$street', barangay = '$barangay', city_town = '$city_town', region = '$region' WHERE customer_address_id = '$customer_address_id'");

      	        header("location: profile.php");
      }

?>