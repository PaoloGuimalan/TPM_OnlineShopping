<!DOCTYPE html>
<head>
     <title>Categories</title>
     <link rel="stylesheet" type="text/css" href="css/categories.css">
     <meta name="viewport" content="width=device-width, initial-scale=0.69">
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.animate-shadow.js"></script>
     <script src="js/categories.js"></script>
</head>

<body>

     <?php 

     session_start();

     $cat_id = $_GET['cat_route_id'];

     $con = new mysqli("localhost", "root", "", "tpm_database");

     $sql = mysqli_query($con, "SELECT * FROM category_table WHERE category_id = '$cat_id'");
     $sqlrow = mysqli_fetch_array($sql);

     $cat_name = $sqlrow['category_name'];

     echo "<input type='hidden' name='cat_id' id='cat_id' value='".$cat_id."'>";

     ?>


     <header id="cat_head">
          <div>
               <table id="tbl_label_cat">
                    <tr>
                         <td>
                              <p id="page_label"><?php echo $cat_name;?></p>
                         </td>
                    </tr>
                    <tr>
                         <td id="btn_holder">
                              <button id="d_button">Home</button>
                         </td>
                    </tr>
               </table>
          </div>
     </header>

     <div>
          <table id="tbl_show_products">
               <tr>
                    <td id="td_pro_show">
                         <?php

                              $product_sect = 1;

                              $sql_n = mysqli_query($con, "SELECT * FROM product_table WHERE product_category = '$cat_name'");
                              while($sqlrow_n = mysqli_fetch_assoc($sql_n))
                              {
                                   $img_cat = $sqlrow_n['product_id'];
                                   $sql_n_img = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$img_cat'");
                                   $sqlrow_n_img = mysqli_fetch_array($sql_n_img);
                                   
                                        echo "
                                        <div class='div_show_products' id='product_sect".$product_sect++."' data-panel='".$sqlrow_n['product_id']."'>
                                        <img src='products/".$sqlrow_n_img['product_id'].$sqlrow_n_img['image_number'].".png' class='products_img_class'>
                                        <table class='tbl_desc'>
                                              <tr>
                                                   <td>
                                                       <p class='prod_name'>".$sqlrow_n['product_name']."</p>
                                                   </td>
                                              </tr>
                                              <tr>
                                                   <td>
                                                        <p class='prod_pr'>Price: P".$sqlrow_n['product_price']."</p>
                                                   </td>
                                              </tr>
                                              <tr>
                                                   <td>
                                                        <p class='prod_brand'>From ".$sqlrow_n['product_brand']."</p>
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

</body>
</html>