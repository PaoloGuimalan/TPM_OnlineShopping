<?php

     session_start();

     $order_id = uniqid().uniqid().uniqid();

     $customer_acc_id = $_SESSION['acc_id'];
     $customer_info_id = $_SESSION['info_id'];
     $customer_add_id = $_SESSION['address_id'];

     $product_id = $_GET['product_id'];
     $quantity = $_GET['quantity'];
     $method = $_GET['method'];
     $order_status = $_GET['order_status'];

     $date_ordered = date("Y-m-d");
     $date_delivery = 'unapplied';
     $date_delivered = 'undelivered';

     $product_type = $_GET['product_type'];
     $product_color = $_GET['product_color'];

     $from = $_GET['from'];
     $id = $_GET['id'];

     //echo $from." ".$id;

     $con = new mysqli("localhost", "root", "", "tpm_database");

     $sql = mysqli_query($con, "INSERT INTO order_table (order_id, customer_acc_id, customer_info_id, customer_add_id, product_id, quantity, product_type, product_color, order_status, date_ordered, date_delivery, date_delivered, payment_method) VALUES ('$order_id', '$customer_acc_id', '$customer_info_id', '$customer_add_id', '$product_id', '$quantity', '$product_type', '$product_color', '$order_status', '$date_ordered', '$date_delivery', '$date_delivered', '$method')");

     if($order_status == 'pending')
     {
                    $notif_id = uniqid();
                    $notif_desc = 'You have successfully placed your order';
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $customer_acc_id;

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");
                    

          header("location: product.php?from=".$from."&id=".$id."&product_id=".$product_id."&isordersuccessful=1");
     }
     else if($order_status == 'cart')
     {

          $notif_id = uniqid();
                    $notif_desc = 'You have successfully added this product to your cart';
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $customer_acc_id;

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");

          header("location: product.php?from=".$from."&id=".$id."&product_id=".$product_id."&isordersuccessful=2");
     }

?>