<?php

     session_start();

     $con = new mysqli("localhost", "root", "", "tpm_database");

     $status = $_GET['status'];
     $order_id = $_GET['order_id'];
     $product_id = $_GET['product_id'];
     $quantity = $_GET['quantity'];
     $date_delivered = date('Y-m-d');
     $date_delivery = date('Y-m-d', mktime(0, 0, 0, date('m'), date('d') + 5, date('Y')));

     $customer_acc_id = $_GET['customer_acc_id'];

     if($status == 'confirm')
     {
         $sql_confirm = mysqli_query($con, "UPDATE order_table SET order_status = 'on delivery', date_delivery = '$date_delivery' WHERE order_id = '$order_id'");
         $sql_minus = mysqli_query($con, "UPDATE product_table SET product_quantity = product_quantity-$quantity WHERE product_id = '$product_id'");

                    $notif_id = uniqid();
                    $notif_desc = 'Your order has been confirmed and is expected to be delivered at '.$date_delivery;
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $customer_acc_id;

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");

         header("location:admin_sales.php#pending");
     }
     else if($status == 'm_s_delivered') 
     {

                    $notif_id = uniqid();
                    $notif_desc = 'Your has been delivered. Thank you for shopping.';
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $customer_acc_id;

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");

     	$sql_confirm = mysqli_query($con, "UPDATE order_table SET order_status = 'delivered', date_delivered = '$date_delivered' WHERE order_id = '$order_id'");
     	header("location:admin_sales.php#on_delivery");
     }
     else if($status == 'cancel') 
     {

                    $notif_id = uniqid();
                    $notif_desc = 'Your order has been cancelled. Please check your order again and reorder. Thank you!';
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $customer_acc_id;

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");

     	$sql_cancel = mysqli_query($con, "UPDATE order_table SET order_status = 'cancelled' WHERE order_id = '$order_id'");
     	header("location:admin_sales.php#cancelled");
     }

?>