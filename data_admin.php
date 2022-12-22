<!DOCTYPE html>
<head>
     <title>Data & Statistics Department</title>
     <link rel="stylesheet" type="text/css" href="css/data_admin.css">
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.animate-shadow.js"></script>
     <script src="js/data_admin.js"></script>
	<p class="head">Data & Statistics DEPARTMENT</p>	
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

<div>
	<table>
		<tr>
			<td>
				 <button id="nav">☰</button> 
			</td>
		</tr>
	</table>
</div>

<div id="side_panel">
	<table id="tbl_panel">
		<tr>
			<td>
				<button id="close_nav">X</button>
			</td>
		</tr>
	</table>
	<table id="tbl_data">
		<tr>
			<td>
				<p id="label_data">Data</p>
			</td>
		</tr>
		<tr>
			<td>
				<p id="label_data_sub">User Addresses by City/Town</p>
			</td>
		</tr>
		<?php

		                $sql_users = mysqli_query($con, "SELECT COUNT(customer_acc_id) as num_cust FROM customer_acc_reg");
		                $sql_users_row = mysqli_fetch_array($sql_users);

		                echo 
		                "
                             <tr id='tr_data'>
								<td id='td_data'>
									<span id='city_title'>Number of Users: ".$sql_users_row['num_cust']."<span>
								</td>
						</tr>
		                ";

                          $sql = mysqli_query($con, "SELECT * FROM customer_address");
                          while($sql_row = mysqli_fetch_assoc($sql))
                          {
                              $count_val = $sql_row['city_town'];
                          	$sql_count_add = mysqli_query($con, "SELECT COUNT(city_town) as city_count FROM customer_address WHERE city_town = '$count_val'");
                          	$sql_count_add_row = mysqli_fetch_array($sql_count_add);

                          	$sql_count_ov = mysqli_query($con, "SELECT COUNT(city_town) as city_ov FROM customer_address");
                          	$sql_count_ov_row = mysqli_fetch_array($sql_count_ov);

                          	$percent_official = $sql_count_add_row['city_count'] / $sql_count_ov_row['city_ov'] * 100;
                          	$output = $percent_official."%";

                                 echo 
                                 "
                                   <tr id='tr_data'>
								<td id='td_data'>
									<span id='city_title'>".$sql_row['city_town']."</span>
									<div id='out_border'><div id='level_in' style='width:".$output."'>".$output."</div></div>
								</td>
							</tr>
                                 ";
                          }

				?>
		<tr>
			<td>
				<p id="label_data_sub">Used Payment Method</p>
			</td>
		</tr>
		<?php

                          $sql = mysqli_query($con, "SELECT * FROM order_table GROUP BY payment_method");
                          while($sql_row = mysqli_fetch_assoc($sql))
                          {
                          	  $main_method = $sql_row['payment_method'];
                                $sql_num = mysqli_query($con, "SELECT COUNT(payment_method) as method FROM order_table WHERE payment_method = '$main_method'");
                                $sql_num_row = mysqli_fetch_array($sql_num);

                                $sql_num_total = mysqli_query($con, "SELECT COUNT(payment_method) as total FROM order_table");
                                $sql_num_row_total = mysqli_fetch_array($sql_num_total);

                                $count_method = $sql_num_row['method'] / $sql_num_row_total['total'] * 100;
                                $count_percentage = $count_method."%";

                                 echo 
                                 "
                                   <tr id='tr_data'>
								<td id='td_data'>
									<span id='city_title'>".$sql_row['payment_method']."</span>
									<div id='out_border_method'><div id='level_in_method' style='width:".$count_percentage."'>".$count_percentage."</div></div>
								</td>
							</tr>
                                 ";
                          }

				?>
		<tr>
			<td>
				<p id="label_data_sub">Order Percentage</p>
			</td>
		</tr>
		<?php

                 $sql_ord = mysqli_query($con, "SELECT COUNT(order_status) as successful FROM order_table WHERE order_status = 'delivered'");
                 $sql_ord_rows = mysqli_fetch_array($sql_ord);

                 $sql_ord_un = mysqli_query($con, "SELECT COUNT(order_status) as unsuccessful FROM order_table WHERE order_status = 'cancelled'");
                 $sql_ord_un_rows = mysqli_fetch_array($sql_ord_un);

                 $sql_ord_ov = mysqli_query($con, "SELECT COUNT(order_status) as overall FROM order_table");
                 $sql_ord_ov_rows = mysqli_fetch_array($sql_ord_ov);

                 $success_perc = $sql_ord_rows['successful'] / $sql_ord_ov_rows['overall'] * 100;
                 $success_res = $success_perc."%";

                 $unsuccess_perc = $sql_ord_un_rows['unsuccessful'] / $sql_ord_ov_rows['overall'] * 100;
                 $unsuccess_res = $unsuccess_perc."%";

                 echo 
                 "
                    <tr id='tr_data'>
                                        <td id='td_data'>
                                              <span id='city_title'>Number of Orders: ".$sql_ord_ov_rows['overall']."</span>
                                        </td>
                    </tr>
                    <tr id='tr_data'>
                                        <td id='td_data'>
                                              <span id='city_title'>Successful Orders: ".$sql_ord_rows['successful']."</span>
                                              <div id='succ'><div id='succ_level' style='width: ".$success_res."'>".$success_res."</div></div>
                                        </td>
                    </tr>
                    <tr id='tr_data'>
                                        <td id='td_data'>
                                              <span id='city_title'>Cancelled Orders: ".$sql_ord_un_rows['unsuccessful']."</span>
                                              <div id='unsucc'><div id='unsucc_level' style='width: ".$unsuccess_res."'>".$unsuccess_res."</div></div>
                                        </td>
                    </tr>
                 ";

		?>
		<tr>
			<td>
				<p id="label_data_sub">Revenue</p>
			</td>
		</tr>
				<?php

				$totale_rev = 0;

                         $sql_del = mysqli_query($con, "SELECT * FROM order_table WHERE order_status = 'delivered'");
                         while($sql_row_del = mysqli_fetch_assoc($sql_del))
                         {
                              $product_id = $sql_row_del['product_id'];
                         	$sql_get = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                         	$sql_row_get = mysqli_fetch_array($sql_get);

                              $totale_rev_single = $sql_row_del['quantity'] * $sql_row_get['product_price'];
                              $totale_rev += $totale_rev_single;

                              
                         }

                         $all_cost = 0;

                         $sql_del_all = mysqli_query($con, "SELECT * FROM product_table");
                         while($sql_row_del_all = mysqli_fetch_assoc($sql_del_all))
                         {
                              
                              $capital = $sql_row_del_all['product_price'] * $sql_row_del_all['product_quantity'];

                              $all_cost += $capital;
                              
                         }

                         $income_percentage = $totale_rev / $all_cost;

                         $result = number_format((float)$income_percentage, 4, '.', '');

                         $percentage_all = 100 - $result;

                          echo 
                                 "
                                   <tr id='tr_data'>
                                        <td id='td_data'>
                                              <span id='city_title'>From all products: ₱ ".$totale_rev."</span>
                                        </td>
                                   </tr>
                                   <tr id='tr_data'>
                                        <td id='td_data'>
                                              <span id='city_title'>Overall cost of stocks: ₱ ".$all_cost."</span>
                                        </td>
                                   </tr>
                                   <tr id='tr_data'>
                                        <td id='td_data'>
                                              <span id='city_title'>Vertical Bar Graph of Revenue from stocks cost:</span>
                                        </td>
                                   </tr>
                                   <tr id='tr_data_2'>
                                        <td id='td_data_2'>
                                              <div id='vertical_bar'><div id='vertical_level' style='height:".$percentage_all."%"."'></div></div>
                                        </td>
                                   </tr>
                                   <tr id='tr_data_f'>
                                        <td id='td_data'>
                                              <span id='perc_title'>Percentage Status: <span id='res'>".$result."%</span></span>
                                        </td>
                                   </tr>
                                 ";

				?>
	</table>
</div>

<div class="logout"><table>
		<tr>
			<td>
			     <input type="submit" name="data_ratings" value="RATINGS" id="ratings" class="btns">
			</td>
			<td>
			     <input type="submit" name="data_reviews" value="TESTIMONIES" id="reviews" class="btns">
			</td>
			<td>
			     <input type="submit" name="data_backup" value="BACKUP DATA" id="backup" class="btns">
			</td>
			<td>
			     <input type="submit" name="data_restore" value="RESTORE" id="restore" class="btns">
			</td>
			<td>
				<form method="POST" action="">
					<input type="submit" name="data_profile" value="PROFILE" class="btns">
				</form>
			</td>
			<td>
				<form method="POST" action="logout.php">
					<input type="submit" name="data_logout" value="LOG OUT" class="btns_l">
				</form>
			</td>
		</tr>
	</table>
</div>

<div id="cover">

<div id="rating_div">

	<h2 id='label_s'>Ratings</h2>
	<?php

	     $num = 1;
	     $level = 1;
	     $bar = 1;

         $sql = mysqli_query($con, "SELECT * FROM product_table");
         while($sql_row = mysqli_fetch_assoc($sql))
         {
             $product_id = $sql_row['product_id'];
             $sql_rating = mysqli_query($con, "SELECT CAST(SUM(stars) / COUNT(stars) as decimal(10,1)) as stars FROM reviews WHERE product_id = '$product_id'");
             $sql_rating_row = mysqli_fetch_array($sql_rating);

             $sql_img = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id'");
             $sql_img_row = mysqli_fetch_array($sql_img);

             $sql_count = mysqli_query($con, "SELECT COUNT(product_id) as num FROM product_table");
             $sql_count_row = mysqli_fetch_array($sql_count);

             $percent = $sql_rating_row['stars'] / 5 * 100;

             if($sql_rating_row['stars'] == 0)
             {
             	$stars = 0;
             }
             else
             {
             	$stars = $sql_rating_row['stars'];
             }

         	echo 
         	"
                <ul>
                <li id='li_rat'>
						<table id='tbl_rating'>
						       <tr>
						            <td>
						                 <img src='products/".$sql_img_row['product_id'].$sql_img_row['image_number'].".png' class='imgs'><span id='pr_name'>".$sql_row['product_name']."</span> | <span id='pr_brand'>".$sql_row['product_brand']."</span>
						            </td>
						            <td id='rate_result'>
						                 <span>Percent: </span>
						                 <span id='percent_rate".$num++."' data-panel='level".$num."' class='percent_rate'>".$percent."%</span>
						                 <span> of 5.0</span>
						                 <div id='bar".$bar++."' class='bar'><div id='level".$level++."' class='level'></div></div> | ".$stars."
						                 <span id='star_result'>&starf;</span>
						                 <input type='hidden' name='num' id='num' value='".$sql_count_row['num']."'>
						            </td>
						       </tr>
						</table>
					</li>
				</ul>

         	";
         }

	?>
</div>

<div id="review_div">
	<h2 id='label_s'>Testimonies</h2>

	<?php
	$sql_cont = mysqli_query($con, "SELECT * FROM testimonies");
                while($sql_cont_row = mysqli_fetch_assoc($sql_cont))
                {

                     echo 
                    '
                        <ul>
                            <li>
                                <table class="tbl_posts">
                                    <tr>
                                        <td>
                                            <p id="content_post" data-panel="'.$sql_cont_row['content'].'"><span id="quotes">"</span><i id="value">'.$sql_cont_row['content'].'</i></p>
                                            <hr id="line2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p id="labels_nms">'.$sql_cont_row['name'].'</p>
                                            <p id="labels_nms2">Date Posted: '.$sql_cont_row['date_posted'].'</p>
                                        </td>
                                    </tr>
                                    <tr id="width_btn">
                                        <td id="width_btn">
                                             <button id="del_post" class="mmm" data-panel="'.$sql_cont_row['name'].'">DELETE POST</button>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        </ul>
                    '
                    ;
                    
                }

        ?>
</div>

<div id="backup_div">
	<h2 id='label_s'>Back Up Data</h2>
	<ul>
		<li id="li_backup">
			<table id="tbl_backup">
				<tr>
					<td>
						<p>Press the button to confirm database backup.</p>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/caution.png" id="img_caution">
					</td>
				</tr>
				<tr>
					<td>
						<button id="backup_con">CONFIRM BACKUP</button>
					</td>
				</tr>
			</table>
		</li>
	</ul>
</div>

<div id="restore_div">
	<h2 id='label_s'>Restore Data</h2>
	<ul>
		<li id="li_restore">
			<table id="tbl_restore">
				<tr>
					<td>
						<p>Select an sql file to restore it. <br>Please make sure to confirm everything before clicking restore</p>
					</td>
				</tr>
				<tr>
					<td>
						<img src="images/warning.png" id="img_warning">
					</td>
				</tr>
				<tr>
					<td>
						<form action="restore.php" method="POST" enctype="multipart/form-data">
						<input type="file" name="file" id="sql_file" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" name="con_sql" id="con_sql" value="RESTORE DATABASE">
						</form>
					</td>
				</tr>
			</table>
		</li>
	</ul>
</div>

</div>

</body>
</html>