<!DOCTYPE html>

<head>
	<title>DISTRIBUTION Department</title>
	<link rel="stylesheet" type="text/css" href="css/admin_sales.css">
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.animate-shadow.js"></script>
     <script src="js/admin_sales.js"></script>
	<p class="head">DISTRIBUTION DEPARTMENT</p>
</head>


<body>

<?php 

     $con = new mysqli("localhost", "root", "", "tpm_database");

     //echo $_COOKIE['admin_id']." ".$_COOKIE['admin_type'];

     if(!isset($_COOKIE['admin_id']))
     {
     	header("location: admin.php#");
     }

?>


<div class="logout"><table>
		<tr>
			<td>
			     <input type="submit" name="stocks_pending" value="PENDING" id="pending">
			</td>
			<td>
			     <input type="submit" name="stocks_on_delivery" value="ON DELIVERY" id="on_delivery">
			</td>
			<td>
			     <input type="submit" name="stocks_delivered" value="DELIVERED" id="delivered">
			</td>
			<td>
			     <input type="submit" name="stocks_cancelled" value="CANCELLED" id="cancelled">
			</td>
			<td>
				<form method="POST" action="">
					<input type="submit" name="stocks_profile" value="PROFILE">
				</form>
			</td>
			<td>
				<form method="POST" action="logout.php">
					<input type="submit" name="sales_logout" value="LOG OUT">
				</form>
			</td>
		</tr>
	</table>
</div>

<div id="div_pending">

     <h2 id='label_s'>Pending</h2>
		
			<?php
                      $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'pending'");
                      while($sqlrow = mysqli_fetch_assoc($sql))
                      {
                         $order_id = $sqlrow['order_id'];
                      	$customer_info_id = $sqlrow['customer_info_id'];
                      	$customer_add_id = $sqlrow['customer_add_id'];
                      	$product_id = $sqlrow['product_id'];
                      	$date_ordered = $sqlrow['date_ordered'];
                      	$date_delivery = $sqlrow['date_delivery'];
                      	$date_delivered = $sqlrow['date_delivered'];
                      	$order_status = $sqlrow['order_status'];
                      	$quantity = $sqlrow['quantity'];
                        $method = $sqlrow['payment_method'];
                        $customer_acc_id = $sqlrow['customer_acc_id'];

                        echo "<input type='hidden' name='customer_acc_id' id='customer_acc_id' class='cust_ids' value='".$customer_acc_id."'>";


                      	$sql_acc_id = mysqli_query($con, "SELECT * FROM customer_info_reg WHERE customer_id = '$customer_info_id'");
                      	$sql_acc_f = mysqli_fetch_array($sql_acc_id);

                      	$sql_add_id = mysqli_query($con, "SELECT * FROM customer_address WHERE customer_address_id = '$customer_add_id'");
                      	$sql_add_f = mysqli_fetch_array($sql_add_id);

                      	$sql_pro_id = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                      	$sql_pro_f = mysqli_fetch_array($sql_pro_id);

                      	$sql_img_id = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id'");
                      	$sql_img_f = mysqli_fetch_array($sql_img_id);

                        $total_price = $sql_pro_f['product_price'] * $quantity;

                     	echo 
                     	"<ul id='wrap_cont'>
                     	   <li>".
                                         "<img src='products/".$sql_img_f['product_id'].$sql_img_f['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>".$sql_acc_f['cust_lastname'].", ".$sql_acc_f['cust_firstname'].", ".$sql_acc_f['cust_middlename']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']." | ₱".$total_price."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Types: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status:".$order_status."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	<li>
                                         <table id='tbl_wrap_bottom'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date of Delivery: ".$date_delivery."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Delivered: ".$date_delivered."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Quantity: ".$quantity." | ".$method."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <input type='hidden' name='ord_id' id='ord_id' value='".$order_id."'>
                                                           <input type='hidden' name='prod_id' id='prod_id' value='".$product_id."'>
                                                           <input type='hidden' name='ord_quantity' id='ord_quantity' value='".$quantity."'>
                                                           <button id='con_ord' name='con_ord' class='c_con_ord' data-panel='".$order_id."#".$product_id."#".$quantity."#".$customer_acc_id."'>Confirm Order</button><button id='can_ord' name='can_ord' class='c_can_ord' data-panel='".$order_id."#".$product_id."#".$quantity."#".$customer_acc_id."'>Cancel Order</button>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	  </ul>";
                      }
			?>
		
</div>

<div id="div_on_delivery">

     <h2 id='label_s'>On Delivery</h2>
          
               <?php
                      $sql_od = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'on delivery'");
                      while($sqlrow_od = mysqli_fetch_assoc($sql_od))
                      {
                         $order_id_od = $sqlrow_od['order_id'];
                         $customer_info_id_od = $sqlrow_od['customer_info_id'];
                         $customer_add_id_od = $sqlrow_od['customer_add_id'];
                         $product_id_od = $sqlrow_od['product_id'];
                         $date_ordered_od = $sqlrow_od['date_ordered'];
                         $date_delivery_od = $sqlrow_od['date_delivery'];
                         $date_delivered_od = $sqlrow_od['date_delivered'];
                         $order_status_od = $sqlrow_od['order_status'];
                         $quantity_od = $sqlrow_od['quantity'];
                         $method2 = $sqlrow_od['payment_method'];
                         $customer_acc_id = $sqlrow_od['customer_acc_id'];

                        echo "<input type='hidden' name='customer_acc_id' id='customer_acc_id' class='cust_ids' value='".$customer_acc_id."'>";

                         $sql_acc_id_od = mysqli_query($con, "SELECT * FROM customer_info_reg WHERE customer_id = '$customer_info_id_od'");
                         $sql_acc_f_od = mysqli_fetch_array($sql_acc_id_od);

                         $sql_add_id_od = mysqli_query($con, "SELECT * FROM customer_address WHERE customer_address_id = '$customer_add_id_od'");
                         $sql_add_f_od = mysqli_fetch_array($sql_add_id_od);

                         $sql_pro_id_od = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id_od'");
                         $sql_pro_f_od = mysqli_fetch_array($sql_pro_id_od);

                         $sql_img_id_od = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id_od'");
                         $sql_img_f_od = mysqli_fetch_array($sql_img_id_od);

                         $total_price2 = $sql_pro_f_od['product_price'] * $quantity_od;

                         echo 
                         "<ul id='wrap_on_d'>
                            <li>".
                                         "<img src='products/".$sql_img_f_od['product_id'].$sql_img_f_od['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>".$sql_acc_f_od['cust_lastname'].", ".$sql_acc_f_od['cust_firstname'].", ".$sql_acc_f_od['cust_middlename']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f_od['product_name']." | ".$sql_pro_f_od['product_brand']." | ₱".$sql_pro_f_od['product_price']." | ₱".$total_price2."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Types: ".$sqlrow_od['product_type']." | ".$sqlrow_od['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f_od['house_no'].", ".$sql_add_f_od['street'].", ".$sql_add_f_od['barangay'].", ".$sql_add_f_od['city_town'].", ".$sql_add_f_od['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered_od." | Order Status:".$order_status_od."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                         ."</li>
                         <li>
                                         <table id='tbl_wrap_bottom'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date of Delivery: ".$date_delivery_od."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Delivered: ".$date_delivered_od."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Quantity: ".$quantity_od." | ".$method2."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <button id='m_s_delivered' name='m_s_delivered' class='btn_m_s_delivered' data-panel='".$order_id_od."#".$product_id_od."#".$quantity_od."#".$customer_acc_id."'>Mark as Delivered</button>
                                                     </td>
                                                </tr>
                                         </table>"
                         ."</li>
                           </ul>";
                      }
               ?>
          
</div>

<div id="div_delivered">

     <h2 id='label_s'>Delivered</h2>
          
               <?php
                      $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'delivered'");
                      while($sqlrow = mysqli_fetch_assoc($sql))
                      {
                         $customer_info_id = $sqlrow['customer_info_id'];
                         $customer_add_id = $sqlrow['customer_add_id'];
                         $product_id = $sqlrow['product_id'];
                         $date_ordered = $sqlrow['date_ordered'];
                         $date_delivery = $sqlrow['date_delivery'];
                         $date_delivered = $sqlrow['date_delivered'];
                         $order_status = $sqlrow['order_status'];
                         $quantity = $sqlrow['quantity'];
                         $method3 = $sqlrow['payment_method'];
                         $customer_acc_id = $sqlrow['customer_acc_id'];

                        echo "<input type='hidden' name='customer_acc_id' id='customer_acc_id' class='cust_ids' value='".$customer_acc_id."'>";

                         $sql_acc_id = mysqli_query($con, "SELECT * FROM customer_info_reg WHERE customer_id = '$customer_info_id'");
                         $sql_acc_f = mysqli_fetch_array($sql_acc_id);

                         $sql_add_id = mysqli_query($con, "SELECT * FROM customer_address WHERE customer_address_id = '$customer_add_id'");
                         $sql_add_f = mysqli_fetch_array($sql_add_id);

                         $sql_pro_id = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                         $sql_pro_f = mysqli_fetch_array($sql_pro_id);

                         $sql_img_id = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id'");
                         $sql_img_f = mysqli_fetch_array($sql_img_id);

                         $total_price3 = $sql_pro_f['product_price'] * $quantity;

                         echo 
                         "<ul id='wrap_d'>
                            <li>".
                                         "<img src='products/".$sql_img_f['product_id'].$sql_img_f['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>".$sql_acc_f['cust_lastname'].", ".$sql_acc_f['cust_firstname'].", ".$sql_acc_f['cust_middlename']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']." | ₱".$total_price3."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Types: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status:".$order_status."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                         ."</li>
                         <li>
                                         <table id='tbl_wrap_bottom'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date of Delivery: ".$date_delivery."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Delivered: ".$date_delivered."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Quantity: ".$quantity." | ".$method3."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                         ."</li>
                           </ul>";
                      }
               ?>
          
</div>

<div id="div_cancelled">

     <h2 id='label_s'>Cancelled</h2>
          
               <?php
                      $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'cancelled'");
                      while($sqlrow = mysqli_fetch_assoc($sql))
                      {
                         $customer_info_id = $sqlrow['customer_info_id'];
                         $customer_add_id = $sqlrow['customer_add_id'];
                         $product_id = $sqlrow['product_id'];
                         $date_ordered = $sqlrow['date_ordered'];
                         $date_delivery = $sqlrow['date_delivery'];
                         $date_delivered = $sqlrow['date_delivered'];
                         $order_status = $sqlrow['order_status'];
                         $quantity = $sqlrow['quantity'];
                         $method4 = $sqlrow['payment_method'];
                         $customer_acc_id = $sqlrow['customer_acc_id'];

                        echo "<input type='hidden' name='customer_acc_id' id='customer_acc_id' class='cust_ids' value='".$customer_acc_id."'>";

                         $sql_acc_id = mysqli_query($con, "SELECT * FROM customer_info_reg WHERE customer_id = '$customer_info_id'");
                         $sql_acc_f = mysqli_fetch_array($sql_acc_id);

                         $sql_add_id = mysqli_query($con, "SELECT * FROM customer_address WHERE customer_address_id = '$customer_add_id'");
                         $sql_add_f = mysqli_fetch_array($sql_add_id);

                         $sql_pro_id = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                         $sql_pro_f = mysqli_fetch_array($sql_pro_id);

                         $sql_img_id = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id'");
                         $sql_img_f = mysqli_fetch_array($sql_img_id);

                         $total_price4 = $sql_pro_f['product_price'] * $quantity;

                         echo 
                         "<ul id='wrap_c'>
                            <li>".
                                         "<img src='products/".$sql_img_f['product_id'].$sql_img_f['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>".$sql_acc_f['cust_lastname'].", ".$sql_acc_f['cust_firstname'].", ".$sql_acc_f['cust_middlename']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']." | ₱".$total_price4."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Types: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status:".$order_status."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                         ."</li>
                         <li>
                                         <table id='tbl_wrap_bottom'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date of Delivery: ".$date_delivery."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Delivered: ".$date_delivered."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Quantity: ".$quantity." | ".$method4."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                         ."</li>
                           </ul>";
                      }
               ?>
          
</div>

</body>
</html>