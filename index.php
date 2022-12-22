<!DOCTYPE html>
<head>
   <title>TPM | Online Shopping</title>
   <link rel="stylesheet" type="text/css" href="css/index.css">
   <meta name="viewport" content="width=device-width, initial-scale=0.69">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/jquery-ui.js"></script>
   <script src="js/jquery.animate-shadow.js"></script>
   <script src="js/index.js"></script>

   <header id='index_header'>
      <table class="main_tbl">
         <tr>
            <td>
               <table id="tbl_header">
                  <tr>
                     <td>
                          <p id="follow_label">Follow us on </p>
                     </td>
                     <td>
                          <a target='blank' href='https://www.facebook.com/TeamPayamanTMC' class="fa fa-facebook"></a>
                     </td>
                     <td>
                          <a target='blank' href='https://www.instagram.com/teampayaman/' class="fa fa-instagram"></a>
                     </td>
                     <td>
                          <a target='blank'  href='https://www.youtube.com/channel/UCsGi_wQfqLuI8DMKocfgXAw' class="fa fa-youtube"></a>
                     </td>
                  </tr>
               </table>

               <?php

                     session_start();

                     if(empty($_SESSION['acc_id']))
                     {
                        echo 
                        '
                           <table class="div_header">
                           <tr>
                              <td>
                                 <form action="login.php#" method="POST">
                                    <input type="submit" name="login_customer" value="LOG IN" id="log_btn">
                                 </form>
                              </td>
                              <td>
                                 <form action="login.php#reg" method="POST">
                                    <input type="submit" name="signup_customer" value="SIGN UP" id="log_btn">
                                 </form>
                              </td>
                           </tr>
                        </table>
                        ';
                     }
                     else
                     {
                        echo 
                        '
                            <table class="div_header">
                              <tr>
                                 <td>
                                     <a href="notifications.php" class="link_notif"><i class="material-icons">notifications</i>Notifications</a>
                                 </td>
                                 <td>
                                      <a href="" class="link_notif"><i class="material-icons" style="font-size:24px; color:white;">help</i>Help</a>
                                 </td>
                                 <td>
                                      <a href="profile.php" class="link_notif"><i class="material-icons" style="font-size:24px; color:white;">person</i>Profile</a>
                                 </td>
                                 <td>
                                    <form action="logout.php" method="POST">
                                       <input type="submit" name="logout_customer" value="Logout" id="logout_btn">
                                    </form>
                                 </td>
                              </tr>
                           </table>
                        ';
                     }

               ?>
            </td>
         </tr>
         <tr>
            <td>
               <table class="third_tbl">
                   <tr>
                      <td id="image_td">
                         <img src="images/logo_header.png" id="logo_header">
                      </td>
                      <td id="search_td">
                          <div id="div_search_box">
                              <table id="tbl_search_box">
                                 <tr>
                                    <td id="search_box_td">
                                        <form action="" method="POST">
                                        <input type="text" name="search_box" id="search_box" placeholder="Search for products or brands">
                                    </td>
                                    <td>
                                        <button id="submit_search" name="submit_search"><i class="material-icons" id="search_icon">search</i></button>
                                        </form>
                                    </td>
                                 </tr>
                              </table>
                          </div>
                      </td>
                      <td id="cart_td">
                           <a href="cart.php"><i class="fa fa-shopping-cart" id="cart_icon"></i></a>
                      </td>
                   </tr>
               </table>
            </td>
         </tr>
         </table>
   </header>
</head>

<body>
<div id="container">
   <div id='ads_section'>
<?php

   $con = new mysqli("localhost", "root", "", "tpm_database");
   $ads_id_image = 1;

   $sql = mysqli_query($con, "SELECT * FROM ads_table WHERE activity_status = 'on'");
   while($sqlrow = mysqli_fetch_array($sql))
   {
      echo 
      "<image src='ads_uploads/".$sqlrow['ad_id_file'].".png' class='ads_class' id='ads_id".$ads_id_image++."' data-panel='".$sqlrow['id']."'>";
   }

?>
      <p id="index_label_head">What's New?</p>
     
      <div id="categories_index">
            <table id="tbl_main_categories">
               <tr>
                  <td>
                     <p id="label_cat">C A T E G O R I E S</p>
                  </td>
               </tr>
               <tr>
                  <td  id='tbl_categories'>
                     <?php
                           $category_img = 1;

                           $sql_cat = mysqli_query($con, "SELECT * FROM category_table");
                           while($sqlrow_cat = mysqli_fetch_assoc($sql_cat))
                           {
                              echo 
                                 "<image src='categories/".$sqlrow_cat['category_image_id'].".png' class='categories_class' id='img_category".$category_img++."' data-panel='".$sqlrow_cat['category_id']."'>";
                           }

                     ?>
                  </td>
               </tr>
               <tr>
                  <td>
                     <p id="label_brand">B R A N D S</p>
                  </td>
               </tr>
               <tr>
                  <td  id='tbl_brand'>
                     <?php
                           $brand_img = 1;

                           $sql_brand = mysqli_query($con, "SELECT * FROM brand_table");
                           while($sqlrow_brand = mysqli_fetch_assoc($sql_brand))
                           {
                              echo 
                                 "<image src='brands/".$sqlrow_brand['brand_image_id'].".png' class='brand_class' id='img_brand".$brand_img++."' data-panel='".$sqlrow_brand['brand_id']."'>";
                           }

                     ?>
                  </td>
               </tr>
            </table>
      </div>
   </div>
</div>


<div id="footer_div">
      
</div>


<footer id="footer_div2_2">
   <div>
         <ul>
            <li>
                 <table id="footer_tbl">
                    <tr>
                       <td>
                          <p id="footer_label">ABOUT US</p>
                       </td>
                    </tr>
                    <tr>
                       <td>
                          <p id="footer_label2">About Team Payaman</p>
                           <p id="footer_label2">About TP Merch</p>
                           <p id="footer_label2">Privacy Policy</p>
                       </td>
                    </tr>
                 </table>
            </li>
            <li>
                 <table id="footer_tbl">
                    <tr>
                       <td>
                          <p id="footer_label">CUSTOMER SERVICE</p>
                       </td>
                    </tr>
                    <tr>
                       <td>
                          <p id="footer_label2">Contact us</p>
                          <p id="footer_label2">FAQ's</p>
                       </td>
                    </tr>
                 </table>
            </li>
            <li>
                 <table id="footer_tbl">
                    <tr>
                       <td>
                          <p id="footer_label">PAYMENT</p>
                       </td>
                    </tr>
                    <tr>
                       <td>
                          <p id="footer_label2"><img src="https://img.icons8.com/plasticine/100/000000/gcash.png" id="footer_label_img"/><img src="images/paymaya.png" id="footer_label_img2"/></p>
                       </td>
                    </tr>
                 </table>
            </li>
            <li>
                 <table id="footer_tbl">
                    <tr>
                       <td>
                          <p id="footer_label">FOLLOW US</p>
                       </td>
                    </tr>
                    <tr>
                       <td>
                          <a target='blank' href='https://www.facebook.com/TeamPayamanTMC' class="fa fa-facebook"></a>
                           <a target='blank' href='https://www.instagram.com/teampayaman/' class="fa fa-instagram"></a>
                           <a target='blank'  href='https://www.youtube.com/channel/UCsGi_wQfqLuI8DMKocfgXAw' class="fa fa-youtube"></a>
                       </td>
                    </tr>
                 </table>
            </li>
            <li>
                 <table id="footer_tbl">
                    <tr>
                       <td>
                          <p id="footer_label">TP APP DOWNLOAD</p>
                       </td>
                    </tr>
                    <tr>
                       <td>
                          <p id="footer_label2">In development</p>
                       </td>
                    </tr>
                 </table>
            </li>
         </ul>
   </div>
</footer>

<footer id="footer_div2">
   <div>
         <table id="c_right_table">
            <tr>
               <td>
                  <hr>
               </td>
            </tr>
            <tr>
               <td>
                  <p id="c_right">© 2021 Team Payaman. All Rights Reserved</p>
               </td>
            </tr>
         </table>
   </div>
</footer>

</body>
</html>