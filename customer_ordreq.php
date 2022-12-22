<?php

    session_start();

    $con = new mysqli("localhost", "root", "", "tpm_database");

    $order_id = $_GET['order_id'];
    $product_id = $_GET['product_id'];
    $order_status = $_GET['order_status'];
    $type = $_GET['type'];

    if($type == 'cart_submit')
    {
    	$sql = mysqli_query($con, "UPDATE order_table SET order_status = '$order_status' WHERE order_id = '$order_id'");

                    $notif_id = uniqid();
                    $notif_desc = 'You have successfully placed the order you had in your cart';
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $_SESSION['acc_id'];

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");

    	header("location: cart.php#cart");
    }
    else if($type == 'cart_cancel')
    {

                    $notif_id = uniqid();
                    $notif_desc = 'You have removed an order in your cart';
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $_SESSION['acc_id'];

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");

    	$sql = mysqli_query($con, "UPDATE order_table SET order_status = '$order_status' WHERE order_id = '$order_id'");
    	header("location: cart.php#cart");
    }
    else if($type == 'cart_cancel_pending')
    {

                    $notif_id = uniqid();
                    $notif_desc = 'You have successfully cancelled your pending order';
                    $notif_type = 'orders';
                    $necessary_id = $product_id;
                    $date_posted = date('Y/m/d');
                    $customer_id = $_SESSION['acc_id'];

                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");

    	$sql = mysqli_query($con, "UPDATE order_table SET order_status = '$order_status' WHERE order_id = '$order_id'");
    	header("location: cart.php#pending");
    }

?>