<!DOCTYPE html>

<?php

           session_start();

           $con = new mysqli("localhost", "root", "", "tpm_database");

           $customer_acc_id = $_SESSION['acc_id'];
		   $customer_info_id = $_SESSION['info_id'];
		   $customer_address_id = $_SESSION['address_id'];

           if (empty($customer_acc_id)) 
           {
                 header("location: logged_out.php");    
           }


		   $sql = mysqli_query($con, "SELECT * FROM customer_acc_reg WHERE customer_acc_id = '$customer_acc_id'");
		   $sql_row = mysqli_fetch_array($sql);

		   $customer_username = $sql_row['cust_username'];


	?>

<head>
	<title>Cart | <?php echo $customer_username; ?></title>
	<link rel="stylesheet" type="text/css" href="css/cart.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.69">
	<script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.animate-shadow.js"></script>
    <script src="js/cart.js"></script> 
</head>


<body>
    <header>
		<ul id="head_ul">
			<li id="li_header">
				<table id="tbl_head">
					<tr>
						<td>
							<img src="images/logo_header.png" id='logo_header'>
						</td>
						<td id="td_label">
							<p id="label_cart">CART | <span id='value_username'><?php echo $customer_username; ?></span></p>
						</td>
					</tr>
				</table>
			</li>
			<li id="li_header">
				<table id="tbl_head_2">
					<tr>
						<td>
							<hr>
						</td>
					</tr>
					<tr>
						<td>
							<ul id="ul_btns">
								<li>
									<button id="cart_btn" class="btns">Cart</button>
								</li>
								<li>
									<button id="pending_btn" class="btns">Pending</button>
								</li>
								<li>
									<button id="od_btn" class="btns">On Delivery</button>
								</li>
								<li>
									<button id="d_btn" class="btns">Delivered</button>
								</li>
								<li>
									<button id="c_btn" class="btns">Cancelled</button>
								</li>
								<li>
									<button id="home_btn" class="btns">Home</button>
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td>
							<ul id="ul_btns">
								<li>
									<button id="label_expense">Open Expense Tracker</button> 
								</li>
							</ul>
						</td>
					</tr>
				</table>
			</li>
		</ul>
	</header>

	<div id='cart_div'>
		<h2 id='label_s'>Cart</h2>
		<?php
	       $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'cart' AND customer_acc_id = '$customer_acc_id'");
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
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Type: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>Total Payment:  ₱".$total_price."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status: ".$order_status."</p>
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
                                                           <button id='sub_ord' name='sub_ord' class='c_con_ord' data-panel='".$order_id."#".$product_id."#".$quantity."'>Submit Order</button>
                                                           <button id='can_ord' name='can_ord' class='c_can_ord' data-panel='".$order_id."#".$product_id."#".$quantity."'>Remove Order</button>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	  </ul>";
                      }
			?>
	</div>

	<div id='pending_div'>
		<h2 id='label_s'>Pending</h2>
		<?php
	       $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'pending' AND customer_acc_id = '$customer_acc_id'");
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
                     	"<ul id='wrap_cont_pending'>
                     	   <li>".
                                         "<img src='products/".$sql_img_f['product_id'].$sql_img_f['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap_pending'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Type: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>Total Payment:  ₱".$total_price."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status: ".$order_status."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	<li>
                                         <table id='tbl_wrap_bottom_pending'>
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
                                                           <button id='can_ord' name='can_ord' class='c_cancel_ord' data-panel='".$order_id."#".$product_id."#".$quantity."'>Cancel Order</button>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	  </ul>";
                      }
			?>
	</div>

	<div id='od_div'>
		<h2 id='label_s'>On Delivery</h2>
		<?php
	       $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'on delivery' AND customer_acc_id = '$customer_acc_id'");
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
                     	"<ul id='wrap_cont_pending'>
                     	   <li>".
                                         "<img src='products/".$sql_img_f['product_id'].$sql_img_f['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap_pending'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Type: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>Total Payment:  ₱".$total_price."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status: ".$order_status."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	<li>
                                         <table id='tbl_wrap_bottom_pending'>
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
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	  </ul>";
                      }
			?>
	</div>

	<div id='d_div'>
		<h2 id='label_s'>Delivered</h2>
		<?php
	       $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'delivered' AND customer_acc_id = '$customer_acc_id'");
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
                     	"<ul id='wrap_cont_pending'>
                     	   <li>".
                                         "<img src='products/".$sql_img_f['product_id'].$sql_img_f['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap_pending'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Type: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>Total Payment:  ₱".$total_price."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status: ".$order_status."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	<li>
                                         <table id='tbl_wrap_bottom_pending'>
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
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	  </ul>";
                      }
			?>
	</div>

	<div id='c_div'>
		<h2 id='label_s'>Cancelled</h2>
		<?php
	       $sql = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'cancelled' AND customer_acc_id = '$customer_acc_id'");
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
                     	"<ul id='wrap_cont_pending'>
                     	   <li>".
                                         "<img src='products/".$sql_img_f['product_id'].$sql_img_f['image_number'].".png' class='imgs'>
                           </li>
                           <li>
                                         <table id='tbl_wrap_pending'>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Product: ".$sql_pro_f['product_name']." | ".$sql_pro_f['product_brand']." | ₱".$sql_pro_f['product_price']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_product'>Type: ".$sqlrow['product_type']." | ".$sqlrow['product_color']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_name'>Total Payment:  ₱".$total_price."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Address: ".$sql_add_f['house_no'].", ".$sql_add_f['street'].", ".$sql_add_f['barangay'].", ".$sql_add_f['city_town'].", ".$sql_add_f['region']."</p>
                                                     </td>
                                                </tr>
                                                <tr>
                                                     <td>
                                                           <p id='cust_address'>Date Ordered: ".$date_ordered." | Order Status: ".$order_status."</p>
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	<li>
                                         <table id='tbl_wrap_bottom_pending'>
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
                                                     </td>
                                                </tr>
                                         </table>"
                      	."</li>
                      	  </ul>";
                      }
			?>
	</div>

    <?php

           $price_in_cart = 0;

           $sql_expense = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'cart' AND customer_acc_id = '$customer_acc_id'");
           while($sql_expense_row = mysqli_fetch_assoc($sql_expense))
           {
               $product_id_get = $sql_expense_row['product_id'];
               $sql_get = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id_get'");
               $sql_get_row = mysqli_fetch_array($sql_get);

               $product_quantity = $sql_expense_row['quantity'];
               $product_price = $sql_get_row['product_price'];

               $total = $product_price * $product_quantity;

               $price_in_cart += $total;

           }


           $price_in_pending = 0;

           $sql_expense_pending = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'pending' AND customer_acc_id = '$customer_acc_id'");
           while($sql_expense_row_pending = mysqli_fetch_assoc($sql_expense_pending))
           {
               $product_id_get_pending = $sql_expense_row_pending['product_id'];
               $sql_get_pending = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id_get_pending'");
               $sql_get_row_pending = mysqli_fetch_array($sql_get_pending);

               $product_quantity_pending = $sql_expense_row_pending['quantity'];
               $product_price_pending = $sql_get_row_pending['product_price'];

               $total_pending = $product_price_pending * $product_quantity_pending;

               $price_in_pending += $total_pending;

           }

           $price_in_od = 0;

           $sql_expense_pending = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'on delivery' AND customer_acc_id = '$customer_acc_id'");
           while($sql_expense_row_pending = mysqli_fetch_assoc($sql_expense_pending))
           {
               $product_id_get_pending = $sql_expense_row_pending['product_id'];
               $sql_get_pending = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id_get_pending'");
               $sql_get_row_pending = mysqli_fetch_array($sql_get_pending);

               $product_quantity_pending = $sql_expense_row_pending['quantity'];
               $product_price_pending = $sql_get_row_pending['product_price'];

               $total_pending = $product_price_pending * $product_quantity_pending;

               $price_in_od += $total_pending;

           }

           $price_in_d = 0;

           $sql_expense_pending = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'delivered' AND customer_acc_id = '$customer_acc_id'");
           while($sql_expense_row_pending = mysqli_fetch_assoc($sql_expense_pending))
           {
               $product_id_get_pending = $sql_expense_row_pending['product_id'];
               $sql_get_pending = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id_get_pending'");
               $sql_get_row_pending = mysqli_fetch_array($sql_get_pending);

               $product_quantity_pending = $sql_expense_row_pending['quantity'];
               $product_price_pending = $sql_get_row_pending['product_price'];

               $total_pending = $product_price_pending * $product_quantity_pending;

               $price_in_d += $total_pending;

           }

           $price_in_c = 0;

           $sql_expense_pending = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'cancelled' AND customer_acc_id = '$customer_acc_id'");
           while($sql_expense_row_pending = mysqli_fetch_assoc($sql_expense_pending))
           {
               $product_id_get_pending = $sql_expense_row_pending['product_id'];
               $sql_get_pending = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id_get_pending'");
               $sql_get_row_pending = mysqli_fetch_array($sql_get_pending);

               $product_quantity_pending = $sql_expense_row_pending['quantity'];
               $product_price_pending = $sql_get_row_pending['product_price'];

               $total_pending = $product_price_pending * $product_quantity_pending;

               $price_in_c += $total_pending;

           }

           $price_in_t = 0;

           $sql_expense_pending = mysqli_query($con, "SELECT * FROM order_table WHERE customer_acc_id = '$customer_acc_id'");
           while($sql_expense_row_pending = mysqli_fetch_assoc($sql_expense_pending))
           {
               $product_id_get_pending = $sql_expense_row_pending['product_id'];
               $sql_get_pending = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id_get_pending'");
               $sql_get_row_pending = mysqli_fetch_array($sql_get_pending);

               $product_quantity_pending = $sql_expense_row_pending['quantity'];
               $product_price_pending = $sql_get_row_pending['product_price'];

               $total_pending = $product_price_pending * $product_quantity_pending;

               $price_in_t += $total_pending;

           }

           $delivered_exp = round($price_in_d / $price_in_t * 100, 2);
           $cancelled_exp = round($price_in_c / $price_in_t * 100, 2);

           $total_exp_lit = $price_in_cart + $price_in_pending + $price_in_od;

           $total_lit_perc = round($total_exp_lit / $price_in_t * 100, 2);

           $dprice_perc = round($price_in_d / $price_in_t * 100, 2);

    ?>

    <div id="expense_tracker_div">
        <h2 id='label_s'>Expense Tracker</h2>
        <ul>
            <li id="ul_details">
                <table>
                    <tr>
                        <td>
                            <p id="expense_res_label">Possible cost of products inside Cart:</p><p id="expense_res_label">Possible cost of products inside Pending:</p><p id="expense_res_label">Possible cost of products On Delivery:</p><p id="expense_res_label">Total Expenses from Delivered Products:</p>
                        </td>
                        <td>
                            <p id="expense_res_label"><?php echo "₱".$price_in_cart;
                            ?></p><p id="expense_res_label"><?php echo "₱".$price_in_pending;
                            ?></p><p id="expense_res_label"><?php echo "₱".$price_in_od;
                            ?></p><p id="expense_res_label"><?php echo "₱".$price_in_d;
                            ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="expense_res_label">Total value of Cancelled Orders:</p>
                        </td>
                        <td>
                            <p id="expense_res_label"><?php echo "₱".$price_in_c;
                            ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="expense_res_label">Possible Incoming Expenses (Cart, Pending, On Delivery):</p>
                        </td>
                        <td>
                            <p id="expense_res_label"><?php echo "₱".$total_exp_lit;
                            ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="pie"><div id="pie_val" style="width: <?php echo $total_lit_perc.'%';?>;"><span id="val_num"><?php echo $total_lit_perc.'%';?></span></div></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="expense_res_label">Percentage of recent expenses (Recieved Orders):</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="pie2"><div id="pie_val2" style="width: <?php echo $dprice_perc.'%';?>;"><span id="val_num"><?php echo $dprice_perc.'%';?></span></div></div>
                        </td>
                    </tr>
                </table>
            </li>


            <li id="graph">
                <table>
                    <tr>
                        <td>
                        <div id="outside">
                            <table id="tbl_in">
                                <tr>
                                        <td class="bars">
                                            <div id='in_delivered' style="height: <?php echo $delivered_exp.'%'; ?>;"></div>
                                        </td>
                                        <td class="bars">
                                            <div id="in_cancelled" style="height: <?php echo $cancelled_exp.'%'; ?>;"></div>
                                        </td>
                                </tr>
                            </table>
                        </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p id="del">Percentage</p>
                            <p id="expense_res_label"><span id="del">Delivered (Green): </span><?php echo $delivered_exp.'%';
                            ?></p>
                            <p id="expense_res_label"><span id="can"> Cancelled (Red): </span><?php echo $cancelled_exp.'%';
                            ?></p>
                            <p id="expense_res_label">Total of possible made expenses(including cancelled orders): <?php echo "₱".$price_in_t;
                            ?></p>
                        </td>
                    </tr>
                </table>
            </li>
        </ul>     
    </div>


</body>
</html>