<!DOCTYPE html>

<head>
	<title>Stocks Department</title>
	<link rel="stylesheet" type="text/css" href="css/admin_stocks.css">
	<p class="head">STOCKS DEPARTMENT</p>
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


<div class="logout">
	<table>
		<tr>
			<td>
			     <input type="submit" name="stocks_categories" value="CATEGORIES" onclick="categories_load();">
			</td>
			<td>
			     <input type="submit" name="stocks_brands" value="BRANDS" onclick="brands_load();">
			</td>
			<td>
			     <input type="submit" name="stocks_products" value="PRODUCTS" onclick="products_load();">
			</td>
			<td>
				<form method="POST" action="">
					<input type="submit" name="stocks_profile" value="PROFILE">
				</form>
			</td>
			<td>
				<form method="POST" action="logout.php">
					<input type="submit" name="stocks_logout" value="LOG OUT">
				</form>
			</td>
		</tr>
	</table>
</div>

<div id='products_div'>
	<table id="tbl_products">
		<tr>
			<td id="support_products">
				<div id="insert_update_products">
					<table>
						<tr>
							<td>
								<p id='label_products'>Products</p>
							</td>
						</tr>
						<tr>
							<td>
								<form action="validate_admin_request.php" method="POST" enctype="multipart/form-data">
							         <input type="file" name="image_1_product">
							         <input type="file" name="image_2_product">
							         <input type="file" name="image_3_product">
							         <input type="file" name="image_4_product">
							         <input type="file" name="image_5_product">
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_name">Product Name: </label>
								<input type="text" name="product_name" id="product_name" placeholder="Name of the Product">
								<input type="hidden" name="admin_id_product" id="admin_id_product" value="<?php echo $_COOKIE['admin_id']; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_description">Products Descricption: </label>
								<textarea id="product_desc" name="product_desc" rows="10" cols="50"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_price">Product Price: </label>
								<input type="text" name="product_price" id="product_price" placeholder="Price of Product">
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_price">Product Types: </label>
								<input type="text" name="product_types" id="product_types" placeholder="Sizes and Types" value="default">
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_price">Product Colors: </label>
								<input type="text" name="product_colors" id="product_colors" placeholder="ex. Green, White, etc." value="default">
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_quantity">Product Quantity: </label>
								<input type="text" name="product_quantity" id="product_quantity" placeholder="Quantity of Product">
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_category">Product Category: </label>
								<select id="product_category" name="product_category">
									<?php

										$sql_one = mysqli_query($con, "SELECT category_name FROM category_table");
										while($sqlrow_one = mysqli_fetch_assoc($sql_one))
										{
											echo "<option value='".$sqlrow_one['category_name']."'>".$sqlrow_one['category_name']."</option>";
										}
                                          
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="product_brand">Product Brand: </label>
								<select id="product_brand" name="product_brand">
									<?php

										$sql_two = mysqli_query($con, "SELECT brand_name FROM brand_table");
										while($sqlrow_two = mysqli_fetch_assoc($sql_two))
										{
											echo "<option value='".$sqlrow_two['brand_name']."'>".$sqlrow_two['brand_name']."</option>";
										}
                                          
									?>
								</select>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit_product" value="SAVE">
							     </form>
							</td>
						</tr>
						<tr>
							<td>
								<form action="admin_stocks.php#products" method="POST">
								<input type="submit" name="cancel_product" value="CANCEL">
							     </form>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td  id="result_products">
				<?php
                         
                         $sql = mysqli_query($con, "SELECT * FROM product_table");
                         while($sqlrow = mysqli_fetch_assoc($sql))
                         {	
                           echo "
                           <div class='output_table'>
                                 <table>
                                        <tr>
                                             <td class='td_holders'>
                                                         <p style='font-family:fantasy;'>Product: ".$sqlrow['product_name']."</p>
                                                         <p>Product Description: </p>".$sqlrow['product_desc']."
                                                         <p>Product Price: ".$sqlrow['product_price']."</p>
                                                         <p>Product Types: ".$sqlrow['product_types']."</p>
                                                         <p>Product Colors: ".$sqlrow['product_colors']."</p>
                                                         <p>Product Quantity: ".$sqlrow['product_quantity']."</p>
                                                         <p>Product Brand: ".$sqlrow['product_brand']."</p>
                                                         <p>Product Category: ".$sqlrow['product_category']."</p>
                                                         <p>Date Posted: ".$sqlrow['product_date_posted']."</p>
                                                         <p>Posted By: ".$sqlrow['admin_id_product']."</p>
                                                         <form action='validate_admin_request.php' method='POST'>
                                                         <input type = 'hidden' name='product_id_del' value='".$sqlrow['product_id']."'>
                                                         <button id='delete_product' name='delete_product'>DELETE</button>
                                                         </form>
                                             </td>";
                                           
                                           $product_id_in_image = $sqlrow['product_id'];
                                           $sql_image_result = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id_in_image'");
                                           while($sqlrow_image_result = mysqli_fetch_assoc($sql_image_result))
                                           {

                                             echo "
                                             <td class='pr_imgs'>
                                                   "."<img src='products/".$sqlrow_image_result['product_id'].$sqlrow_image_result['image_number'].".png' id='image_pro'>
                                             </td>";
                                           }

                                             echo "
                                        </tr>
                                 </table>
                           </div>";     
                         }
       	    	    ?>
			</td>
		</tr>
	</table>
</div>

<div id='brands_div'>
	<table id="tbl_brands">
		<tr>
			<td id="support_brands">
				<div id="insert_update_brands">
					<table>
						<tr>
							<td>
								<p id='label_brands'>Brands</p>
							</td>
						</tr>
						<tr>
							<td>
								<form action="validate_admin_request.php" method="POST" enctype="multipart/form-data">
							         <input type="file" name="image_brand">
							</td>
						</tr>
						<tr>
							<td>
								<label for="brand_name">Brand Name: </label>
								<input type="text" name="brand_name" id="brand_name" placeholder="Name of the Brand">
								<input type="hidden" name="admin_id_brand" id="admin_id_brand" value="<?php echo $_COOKIE['admin_id']; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label for="brand_description">Brand Description: </label>
								<textarea id="brand_decsription" name="brand_description" rows="10" cols="50"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit_brand" value="SAVE">
							     </form>
							</td>
						</tr>
						<tr>
							<td>
								<form action="admin_stocks.php#brands" method="POST">
								<input type="submit" name="cancel_brand" value="CANCEL">
							     </form>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td  id="result_brands">
				<?php
                         
                         $sql = mysqli_query($con, "SELECT * FROM brand_table");
                         while($sqlrow = mysqli_fetch_assoc($sql))
                         {	
                           echo "
                           <div class='output_table'>
                                 <table>
                                        <tr>
                                             <td>
                                                  <img src='brands/".$sqlrow['brand_image_id'].".png' id='image_cat'>
                                             </td>
                                             <td>
                                                         <p style='font-family:fantasy;'>Brand: ".$sqlrow['brand_name']."</p>
                                                         <p>Brand Description: </p>".$sqlrow['brand_desc']."
                                                         <p>Date Posted: ".$sqlrow['brand_date_added']."</p>
                                                         <p>Posted By: ".$sqlrow['admin_id_brand']."</p>
                                                         <form action='validate_admin_request.php' method='POST'>
                                                         <input type = 'hidden' name='brand_id_del' value='".$sqlrow['brand_id']."'>
                                                         <input type = 'hidden' name='brand_image_id' value='".$sqlrow['brand_image_id']."'>
                                                         <button id='delete_brand' name='delete_brand'>DELETE</button>
                                                         </form>
                                             </td>
                                        </tr>
                                 </table>
                           </div>";     
                         }
       	    	    	 ?>
			</td>
		</tr>
	</table>
</div>

<div id='categories_div'>
	<table id="tbl_categories">
		<tr>
			<td id="support_categories">
				<div id="insert_update_categories">
					<table>
						<tr>
							<td>
								<p id='label_categories'>Categories</p>
							</td>
						</tr>
						<tr>
							<td>
								<form action="validate_admin_request.php" method="POST" enctype="multipart/form-data">
							         <input type="file" name="image_category">
							</td>
						</tr>
						<tr>
							<td>
								<label for="category_name">Category Name: </label>
								<input type="text" name="category_name" id="category_name" placeholder="Name of the Category">
								<input type="hidden" name="admin_id" id="admin_id" value="<?php echo $_COOKIE['admin_id']; ?>">
							</td>
						</tr>
						<tr>
							<td>
								<label for="category_description">Category Descricption: </label>
								<textarea id="category_decsription" name="category_description" rows="10" cols="50"></textarea>
							</td>
						</tr>
						<tr>
							<td>
								<input type="submit" name="submit_category" value="SAVE">
							     </form>
							</td>
						</tr>
						<tr>
							<td>
								<form action="admin_stocks.php#categories" method="POST">
								<input type="submit" name="cancel_category" value="CANCEL">
							     </form>
							</td>
						</tr>
					</table>
				</div>
			</td>
			<td  id="result_categories">
				<?php
                         
                         $sql = mysqli_query($con, "SELECT * FROM category_table");
                         while($sqlrow = mysqli_fetch_assoc($sql))
                         {	
                           echo "
                           <div class='output_table'>
                                 <table>
                                        <tr>
                                             <td>
                                                  <img src='categories/".$sqlrow['category_image_id'].".png' id='image_cat'>
                                             </td>
                                             <td>
                                                         <p style='font-family:fantasy;'>Category: ".$sqlrow['category_name']."</p>
                                                         <p>Category Description: </p>".$sqlrow['category_desc']."
                                                         <p>Date Posted: ".$sqlrow['category_date_added']."</p>
                                                         <p>Posted By: ".$sqlrow['admin_id']."</p>
                                                         <form action='validate_admin_request.php' method='POST'>
                                                         <input type = 'hidden' name='category_id_del' value='".$sqlrow['category_id']."'>
                                                         <input type = 'hidden' name='category_image_id' value='".$sqlrow['category_image_id']."'>
                                                         <button id='delete_category' name='delete_category'>DELETE</button>
                                                         </form>
                                             </td>
                                        </tr>
                                 </table>
                           </div>";     
                         }
       	    	    	 ?>
			</td>
		</tr>
	</table>
</div>

<script type="text/javascript" src="js/admin_stocks.js"></script>

</body>
</html>