<!DOCTYPE html>
<head>
     <title id="title">TPM Product</title>   
     <link rel="stylesheet" type="text/css" href="css/product.css">
     <meta name="viewport" content="width=device-width, initial-scale=0.69">
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.animate-shadow.js"></script>
     <script src="js/product.js"></script>
</head>

<body>

     <?php

          session_start();

          if(empty($_SESSION['acc_id']))
          {
               $show_btns = false;
          }
          else
          {
               $acc_id = $_SESSION['acc_id'];
               $info_id = $_SESSION['acc_id'];
               $show_btns = true;

               echo "<input type='hidden' name='info_id_input' id='info_id_input' value='".$info_id."'>";
          }

          $con = new mysqli("localhost", "root", "", "tpm_database");

          $product_id = $_GET['product_id'];

          $sql = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
          $sqlrow = mysqli_fetch_array($sql);

          echo "<input type='hidden' id='supplement' name='supplement' value='".$sqlrow['product_name']." | ".$sqlrow['product_brand']."'>
          <input type='hidden' id='product_id' name='product_id' value='".$sqlrow['product_id']."'>
          <input type='hidden' id='session_success' name='session_success' value='".$_GET['isordersuccessful']."'>
          <input type='hidden' id='from_link' name='from_link' value='".$_GET['from']."'>
          <input type='hidden' id='id_link' name='id_link' value='".$_GET['id']."'>";

          $sql_rating = mysqli_query($con, "SELECT CAST(SUM(stars) / COUNT(stars) as decimal(10,1)) as stars FROM reviews WHERE product_id = '$product_id'");
             $sql_rating_row = mysqli_fetch_array($sql_rating);

             if($sql_rating_row['stars'] == 0)
             {
               $stars = 0;
             }
             else
             {
               $stars = $sql_rating_row['stars'];
             }


     ?>

     <div id="mini_nav">
          <table id="tbl_nav">
               <tr>
                    <td>
                         <button id="btn_back">Back</button>
                    </td>
                    <td>
                         <button id="btn_home">Home</button>
                    </td>
               </tr>
          </table>
     </div>

     <div id="session_order">
          <p>Order Successfull</p>
     </div>

     <div id="session_order_cart">
          <p>Added to Cart</p>
     </div>

     <div id="prev_pro">
          <ul id="content">
               <li id="img_li">
                    <?php

                         $sql_img = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id'");
                         $sqlrow_img = mysqli_fetch_array($sql_img);

                         echo 
                         "
                              <img src='products/".$sqlrow_img['product_id'].$sqlrow_img['image_number'].".png' id='img_act_pro'> 
                          ";

                    ?>
               </li>
               <li id="tbl_li">
                    <?php

                         echo 
                         "
                             <table id='inside_tbl'>
                                    <tr>
                                         <td>
                                              <p id='name_product'>".$sqlrow['product_name']." | <span id='brand_product'>".$sqlrow['product_brand']."</span> | <span id='brand_product'>".$stars."</span><span id='star_rate'>&starf;</span></p>
                                         </td>
                                    </tr>
                                    <tr>
                                         <td>
                                              <p id='desc_product'>Description</p>
                                         </td>
                                    </tr>
                                    <tr>
                                         <td>
                                              <p id='descval_product'>".$sqlrow['product_desc']."</p>
                                         </td>
                                    </tr>
                                    <tr>
                                         <td>
                                              <p id='desc_product'>Price: <span id='price_text'>₱".$sqlrow['product_price']."</span></p>
                                         </td>
                                    </tr>
                                    <tr>
                                        <td class='imgs_cls'>";

                                        $imgs = 1;

                                        $sql_img = mysqli_query($con, "SELECT * FROM product_image_table WHERE product_id = '$product_id'");
                                        while($sqlrow_img = mysqli_fetch_assoc($sql_img))
                                        {
                                        echo 
                                        "
                                             <img src='products/".$sqlrow_img['product_id'].$sqlrow_img['image_number'].".png' id='img_act_pro_btns".$imgs++."' class='the_imgs'>
                                         ";
                                        }
                                       echo 
                                       "</td>
                                    </tr>
                             </table>
                          ";

                    ?>
               </li>
          </ul>
     </div>

     <div id="cart_nav">
          <ul id="order_ul">
               <li>
                    <span class="labels">Type:</span>
                    <select id='product_type' class="btns_con">
                         <?php

                            $sql_types = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                            $sql_types_row = mysqli_fetch_array($sql_types);

                            $result_f = preg_split("/\,/", $sql_types_row['product_types']);

                            $loop_f = count($result_f);

                            for ($i_f=0; $i_f < $loop_f; $i_f++) 
                            { 

                              echo
                                 "
                                     <option value='".$result_f[$i_f]."'>".$result_f[$i_f]."</option>
                                 ";
                                 
                            }


                         ?>
                    </select>
               </li>
               <li>
                    <span class="labels">Color:</span>
                    <select id='product_color' class="btns_con">
                         <?php

                            $sql_types = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                            $sql_types_row = mysqli_fetch_array($sql_types);

                            $result = preg_split("/\,/", $sql_types_row['product_colors']);

                            $loop = count($result);

                            for ($i=0; $i < $loop; $i++) 
                            { 

                              echo
                                 "
                                     <option value='".$result[$i]."'>".$result[$i]."</option>
                                 ";
                                 
                            }

                         ?>
                    </select>
               </li>
               <li>
                    <select id='payment_method' class="btns_con">
                         <option value="cash_on_delivery">Cash on Deliver</option>
                         <option value="gcash">Gcash</option>
                         <option value="paymaya">Paymaya</option>
                    </select>
               </li>
               <li>
                    <button id="btn_minus" class="ord_count">-</button>
               </li>
               <li>
                    <input type="text" name="num_order" id='num_order' value = 1>
               </li>
               <li>
                    <button id="btn_plus" class="ord_count">+</button>
               </li>
               <li>
                    <button id="btn_confirm_add_cart" class="btns_con">CONFIRM CART</button>
               </li>
          </ul>
     </div>

     <div id="buy_nav">
          <ul id="order_ul">
               <li>
                    <span class="labels">Type:</span>
                    <select id='product_type_buy' class="btns_con">
                         <?php

                            $sql_types = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                            $sql_types_row = mysqli_fetch_array($sql_types);

                            $result_f = preg_split("/\,/", $sql_types_row['product_types']);

                            $loop_f = count($result_f);

                            for ($i_f=0; $i_f < $loop_f; $i_f++) 
                            { 

                              echo
                                 "
                                     <option value='".$result_f[$i_f]."'>".$result_f[$i_f]."</option>
                                 ";
                                 
                            }


                         ?>
                    </select>
               </li>
               <li>
                    <span class="labels">Color:</span>
                    <select id='product_color_buy' class="btns_con">
                         <?php

                            $sql_types = mysqli_query($con, "SELECT * FROM product_table WHERE product_id = '$product_id'");
                            $sql_types_row = mysqli_fetch_array($sql_types);

                            $result = preg_split("/\,/", $sql_types_row['product_colors']);

                            $loop = count($result);

                            for ($i=0; $i < $loop; $i++) 
                            { 

                              echo
                                 "
                                     <option value='".$result[$i]."'>".$result[$i]."</option>
                                 ";
                                 
                            }

                         ?>
                    </select>
               </li>
               <li>
               <select id='payment_method_buy' class="btns_con">
                         <option value="cash_on_delivery">Cash on Deliver</option>
                         <option value="gcash">Gcash</option>
                         <option value="paymaya">Paymaya</option>
                    </select>
               </li>
               <li>
                    <button id="btn_minus_buy" class="ord_count">-</button>
               </li>
               <li>
                    <input type="text" name="num_order_buy" id='num_order_buy' value = 1>
               </li>
               <li>
                    <button id="btn_plus_buy" class="ord_count">+</button>
               </li>
               <li>
                    <button id="btn_confirm_order" class="btns_con">CONFIRM ORDER</button>
               </li>
          </ul>
     </div>

     <div>
          <?php

               if($show_btns == true)
               {
                    echo 
                    '
                      <ul id="btns_ul">
                         <li>
                              <button id="btn_add" class="btns">ADD TO CART</button>
                         </li>
                         <li>
                              <button id="btn_buy" class="btns">BUY</button>
                         </li>
                      </ul>
                    ';
               }
               else if ($show_btns == false) {
                    echo 
                    '
                      <ul id="btns_ul">
                         <li>
                              <button id="btn_log" class="btns">LOG IN FIRST</button>
                         </li>
                      </ul>
                    ';
               }


          ?>
     </div>

     <p id="label_review">REVIEWS</p>

     <div>
          <?php

               if($show_btns == true)
               {
                    echo 
                    '
                      <ul id="review_ul">
                         <li id="review_li">
                              <p id="review_holder">Add Review</p>

                              <input type="hidden" name="review_id" id="review_id" value="'.uniqid().uniqid().uniqid().'">
                              <input type="hidden" name="prodid" id="prodid" value="'.$product_id.'">

                              <span class="stars" id="1">&star;</span><span class="stars" id="2">&star;</span><span class="stars" id="3">&star;</span><span class="stars" id="4">&star;</span><span class="stars" id="5">&star;</span>
                              <textarea name="add_review" id="add_review" placeholder="Write something....."></textarea>
                              <button id="confirm_review">SUBMIT</button>
                         </li>
                       </ul>
                    ';
               }
               else if ($show_btns == false) {
                    echo 
                    '
                      <ul id="btns_ul">
                         <li>
                              <button id="btn_log" class="btns">LOG IN FIRST</button>
                         </li>
                      </ul>
                    ';
               }


          ?>

     <div>
                    <?php

                          $sql_reviews = mysqli_query($con, "SELECT * FROM reviews WHERE product_id = '$product_id'");
                          while($sqlrow_reviews = mysqli_fetch_assoc($sql_reviews))
                          {
                                 $customer_id = $sqlrow_reviews['customer_info_id'];

                                 $sql_user = mysqli_query($con, "SELECT * FROM customer_acc_reg WHERE customer_acc_id = '$customer_id'");
                                 $sql_user_row = mysqli_fetch_array($sql_user);

                                 echo 
                                 "<ul>
                                 <li id='li_rev'>
                                         <table id='tbl_rev'>
                                               <tr>
                                                   <td>".
                                                         "<span id='username_label'>".$sql_user_row['cust_username']." | </span>";

                                                         for ($i=0; $i < $sqlrow_reviews['stars']; $i++) { 
                                                              echo "<span class='res_stars' id='res1'>&starf;</span>";
                                                         }

                                  echo "
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td id='td_content'>".
                                                         "<p id='review_par'>".$sqlrow_reviews['review_content']."</p>
                                                   </td>
                                               </tr>
                                               <tr>
                                                   <td>".
                                                         "<p id='date_posted_label'>Date Posted: ".$sqlrow_reviews['date_posted']."</p>
                                                   </td>
                                               </tr>
                                         </table>
                                 </li>
                                 </ul>";
                          }
                    ?>
     </div>

</body>
</html>