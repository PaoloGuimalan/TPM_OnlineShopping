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
	<title>Notifications | <?php echo $customer_username; ?></title>
	<link rel="stylesheet" type="text/css" href="css/notifications.css">
	<meta name="viewport" content="width=device-width, initial-scale=0.69">
	<script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.animate-shadow.js"></script>
    <script src="js/notifications.js"></script> 
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
							<p id="label_cart">Notifications | <span id='value_username'><?php echo $customer_username; ?></span></p>
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
									<button id="orders_btn" class="btns">Orders</button>
								</li>
								<li>
									<button id="updates_btn" class="btns">Updates</button>
								</li>
								<li>
									<button id="news_btn" class="btns">What's New</button>
								</li>
								<li>
									<button id="home_btn" class="btns">Home</button>
								</li>
							</ul>
						</td>
					</tr>
				</table>
			</li>
		</ul>
	</header>

	<div id="orders_div">
		<h2 id='label_s'>Orders</h2>
		<?php

               $sql_n1 = mysqli_query($con, "SELECT * FROM notifications WHERE notif_type = 'orders' AND customer_id = '$customer_acc_id'");
               while ($sql_n1_row = mysqli_fetch_assoc($sql_n1))
               {

                     echo
                     "
                         <ul>
                              <li id='li_res'>
                                   <table id='tbl_wrap'>
                                          <tr>
                                               <td>
                                                    ".$sql_n1_row['notif_desc']."
                                               </td>
                                          </tr>
                                          <tr>
                                               <td>
                                                    ".$sql_n1_row['date_posted']."
                                               </td>
                                          </tr>
                                   </table>
                              </li>
                         </ul>
                     ";

               }

		?>
	</div>

	<div id="updates_div">
		<h2 id='label_s'>Updates</h2>
		<?php

               $sql_n1 = mysqli_query($con, "SELECT * FROM notifications WHERE notif_type = 'product' AND customer_id = '$customer_acc_id'");
               while ($sql_n1_row = mysqli_fetch_assoc($sql_n1))
               {

                     echo
                     "
                         <ul>
                              <li id='li_res'>
                                   <table id='tbl_wrap'>
                                          <tr>
                                               <td>
                                                    ".$sql_n1_row['notif_desc']."
                                               </td>
                                          </tr>
                                          <tr>
                                               <td>
                                                    ".$sql_n1_row['date_posted']."
                                               </td>
                                          </tr>
                                   </table>
                              </li>
                         </ul>
                     ";

               }

		?>
	</div>

	<div id="news_div">
		<h2 id='label_s'>What's New</h2>
		<?php

               $sql_n1 = mysqli_query($con, "SELECT * FROM notifications WHERE notif_type = 'ads' AND customer_id = '$customer_acc_id'");
               while ($sql_n1_row = mysqli_fetch_assoc($sql_n1))
               {

                     echo
                     "
                         <ul>
                              <li id='li_res'>
                                   <table id='tbl_wrap'>
                                          <tr>
                                               <td>
                                                    ".$sql_n1_row['notif_desc']."
                                               </td>
                                          </tr>
                                          <tr>
                                               <td>
                                                    ".$sql_n1_row['date_posted']."
                                               </td>
                                          </tr>
                                   </table>
                              </li>
                         </ul>
                     ";

               }

		?>
	</div>
</body>
</html>