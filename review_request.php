<?php

      session_start();

      $con = new mysqli("localhost", "root", "", "tpm_database");

      $product_id = $_GET['prodid'];
      $review_id = $_GET['review_id'];
      $customer_info_id = $_GET['customer_info_id'];
      $review_content = $_GET['review_content'];
      $stars = $_GET['stars'];
      $date_posted = date("Y-m-d");

      $from = $_GET['from'];
      $id = $_GET['id'];

      //echo $product_id.$review_id.$customer_info_id.$review_content.$stars.$date_posted;

      $sql = mysqli_query($con, "INSERT INTO reviews (review_id, product_id, customer_info_id, review_content, date_posted, stars) VALUES ('$review_id', '$product_id', '$customer_info_id', '$review_content', '$date_posted', '$stars')");

      header("location:product.php?from=".$from."&id=".$id."&product_id=".$product_id."&isordersuccessful=0");

?>