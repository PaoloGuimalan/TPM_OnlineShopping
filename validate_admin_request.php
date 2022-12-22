<?php

     $con = new mysqli("localhost", "root", "", "tpm_database");

     //print_r($_FILES['file']);    
 

     if(isset($_POST['save_admin_ad']))
     {
     	$ad_id = $_POST['ad_id'];
     	$admin_id = $_POST['admin_id'];
     	$ad_title = $_POST['ad_title'];
     	$ad_desc = $_POST['w3review'];
        $ad_link = $_POST['ad_link'];
     	$ad_id_file = $ad_title.$ad_id;
     	$date_posted = date("Y/m/d");
          $activity_status = 'on';

     	$file = $_FILES['file'];

     	$filename = $_FILES['file']['name'];
     	$filetmpname = $_FILES['file']['tmp_name'];
     	$filesize = $_FILES['file']['size'];
     	$fileerror = $_FILES['file']['error'];
     	$filetype = $_FILES['file']['type'];

     	$fileExt = explode(".", $filename);
     	$fileActualExt = strtolower(end($fileExt));

     	$allowed = array('png');

     	if (in_array($fileActualExt, $allowed)) {
     		if ($fileerror === 0) {
     			if ($filesize < 1000000) {
     				$filename_new = $ad_title.$ad_id.".".$fileActualExt;
     				$filedest = 'ads_uploads/'.$filename_new;
     				move_uploaded_file($filetmpname, $filedest);


                    $notif_id = uniqid();
                    $notif_desc = $ad_desc;
                    $notif_type = 'ads';
                    $necessary_id = $ad_id;
                    $date_posted = date('Y/m/d');

                    $sql_users = mysqli_query($con, "SELECT * FROM customer_acc_reg");
                    while($sql_users_row = mysqli_fetch_assoc($sql_users))
                    {
                        $customer_id = $sql_users_row['customer_acc_id'];
                        $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");
                    }


                    $sql = mysqli_query($con, "INSERT INTO ads_table (id, ad_title, ad_desc, ad_link, ad_id_file, date_posted, admin_id, activity_status) VALUES ('$ad_id', '$ad_title', '$ad_desc', '$ad_link', '$ad_id_file', '$date_posted', '$admin_id', '$activity_status')");

     				header("location: admin_ads.php");
     			}
     			else
     			{
     				?>
     		     <script>
     		     	alert("error in file size");
     		     </script>
     		<?php
     			}
     		}
     		else
     		{
     			?>
     		     <script>
     		     	alert("there is an error");
     		     </script>
     		<?php
     		}
     	}
     	else
     	{
     		?>
     		     <script>
     		     	alert("not in array");
     		     </script>
     		<?php
     	}
     	
     }

     else if (isset($_POST['turn_off_button'])) {
         $turn_off_value = $_POST['turn_off_value'];

         $sql = mysqli_query($con, "UPDATE ads_table SET activity_status='off' WHERE id='$turn_off_value'");
         header("location: admin_ads.php#on");
     }

     else if (isset($_POST['turn_on_button'])) {
         $turn_off_value = $_POST['turn_on_value'];

         $sql = mysqli_query($con, "UPDATE ads_table SET activity_status='on' WHERE id='$turn_off_value'");
         header("location: admin_ads.php#off");
     }

     else if (isset($_POST['submit_category'])) {

         $category_id = uniqid().uniqid();
         $category_name = $_POST['category_name'];
         $category_desc = $_POST['category_description'];
         $category_date_added = date("Y/m/d");
         $admin_id = $_POST['admin_id'];
         $category_image_id = $category_name.$category_id;



            $file = $_FILES['image_category'];

            $filename = $_FILES['image_category']['name'];
            $filetmpname = $_FILES['image_category']['tmp_name'];
            $filesize = $_FILES['image_category']['size'];
            $fileerror = $_FILES['image_category']['error'];
            $filetype = $_FILES['image_category']['type'];

            $fileExt = explode(".", $filename);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('png');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileerror === 0) {
                    if ($filesize < 1000000) {
                        $filename_new = $category_image_id.".".$fileActualExt;
                        $filedest = 'categories/'.$filename_new;
                        move_uploaded_file($filetmpname, $filedest);

                        $sql = mysqli_query($con, "INSERT INTO category_table (category_id, category_name, category_desc, category_date_added, category_image_id, admin_id) VALUES ('$category_id', '$category_name', '$category_desc', '$category_date_added', '$category_image_id', '$admin_id')");

                        header("location: admin_stocks.php#categories");
                    }
                    else
                    {
                        ?>
                     <script>
                        alert("error in file size");
                     </script>
                <?php
                    }
                }
                else
                {
                    ?>
                     <script>
                        alert("there is an error");
                     </script>
                <?php
                }
            }
            else
            {
                ?>
                     <script>
                        alert("not in array");
                     </script>
                <?php
            }

     }

     else if (isset($_POST['delete_category'])) {
         $category_id_del = $_POST['category_id_del'];
         $category_image_id = $_POST['category_image_id'];

         $path = "categories/".$category_image_id.".png";
         unlink($path);
         $sql_del = mysqli_query($con, "DELETE FROM category_table WHERE category_id = '$category_id_del'");
         header("location: admin_stocks.php#categories");
     }

     else if (isset($_POST['delete_brand'])) {
         $brand_id_del = $_POST['brand_id_del'];
         $brand_image_id = $_POST['brand_image_id'];

         $path = "brands/".$brand_image_id.".png";
         unlink($path);
         $sql_del = mysqli_query($con, "DELETE FROM brand_table WHERE brand_id = '$brand_id_del'");
         header("location: admin_stocks.php#brands");
     }

     else if (isset($_POST['delete_product'])) {
         $product_id_del = $_POST['product_id_del'];

         $path_1 = "products/".$product_id_del."1".".png";
         $path_2 = "products/".$product_id_del."2".".png";
         $path_3 = "products/".$product_id_del."3".".png";
         $path_4 = "products/".$product_id_del."4".".png";
         $path_5 = "products/".$product_id_del."5".".png";

         unlink($path_1);
         unlink($path_2);
         unlink($path_3);
         unlink($path_4);
         unlink($path_5);

         $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id_del'");
         $sql_del_sec = mysqli_query($con, "DELETE FROM product_table WHERE product_id = '$product_id_del'");
         header("location: admin_stocks.php#products");
     }

     else if(isset($_POST['submit_brand']))
     {
         $brand_id = uniqid().uniqid();
         $brand_name = $_POST['brand_name'];
         $brand_description = $_POST['brand_description'];
         $brand_date_added = date("Y/m/d");
         $admin_id_brand = $_POST['admin_id_brand'];
         $brand_image_id = $brand_name.$brand_id;
          

        $file = $_FILES['image_brand'];

            $filename = $_FILES['image_brand']['name'];
            $filetmpname = $_FILES['image_brand']['tmp_name'];
            $filesize = $_FILES['image_brand']['size'];
            $fileerror = $_FILES['image_brand']['error'];
            $filetype = $_FILES['image_brand']['type'];

            $fileExt = explode(".", $filename);
            $fileActualExt = strtolower(end($fileExt));

            $allowed = array('png');

            if (in_array($fileActualExt, $allowed)) {
                if ($fileerror === 0) {
                    if ($filesize < 1000000) {
                        $filename_new = $brand_image_id.".".$fileActualExt;
                        $filedest = 'brands/'.$filename_new;
                        move_uploaded_file($filetmpname, $filedest);

                        $sql = mysqli_query($con, "INSERT INTO brand_table (brand_id, brand_name, brand_desc, brand_date_added, brand_image_id, admin_id_brand) VALUES ('$brand_id', '$brand_name', '$brand_description', '$brand_date_added', '$brand_image_id', '$admin_id_brand')");

                        header("location: admin_stocks.php#brands");
                    }
                    else
                    {
                        ?>
                     <script>
                        alert("error in file size");
                     </script>
                <?php
                    }
                }
                else
                {
                    ?>
                     <script>
                        alert("there is an error");
                     </script>
                <?php
                }
            }
            else
            {
                ?>
                     <script>
                        alert("not in array");
                     </script>
                <?php
            }

     }

     else if (isset($_POST['submit_product'])) 
     {

          $product_id = uniqid().uniqid();
          $product_name = $_POST['product_name'];
          $product_desc = $_POST['product_desc'];
          $product_price = $_POST['product_price'];
          $product_quantity = $_POST['product_quantity'];
          $product_category = $_POST['product_category'];
          $product_brand = $_POST['product_brand'];
          $product_date_posted = date("Y/m/d");
          $admin_id_product = $_POST['admin_id_product'];

          $product_types = $_POST['product_types'];
          $product_colors = $_POST['product_colors'];

          $image_2 = false;
          $image_3 = false;
          $image_4 = false;
          $image_5 = false;


          $file_1 = $_FILES['image_1_product'];

            $filename_1 = $_FILES['image_1_product']['name'];
            $filetmpname_1 = $_FILES['image_1_product']['tmp_name'];
            $filesize_1 = $_FILES['image_1_product']['size'];
            $fileerror_1 = $_FILES['image_1_product']['error'];
            $filetype_1 = $_FILES['image_1_product']['type'];

            $fileExt_1 = explode(".", $filename_1);
            $fileActualExt_1 = strtolower(end($fileExt_1));

            $allowed_1 = array('png');

            if (in_array($fileActualExt_1, $allowed_1)) {
                if ($fileerror_1 === 0) {
                    if ($filesize_1 < 3000000) {
                        $filename_new_1 = $product_id."1".".".$fileActualExt_1;
                        $filedest_1 = 'products/'.$filename_new_1;
                        move_uploaded_file($filetmpname_1, $filedest_1);

                        $p_i_d_1 = uniqid().uniqid();
                        $image_number_1 = "1";
                        $sql_image_1 = mysqli_query($con, "INSERT INTO product_image_table (product_image_id, product_id, image_number) VALUES ('$p_i_d_1', '$product_id', '$image_number_1')");
                        $image_2 = true;
                    }
                    else
                    {
                        echo "image 1 file_size error"."<br>";
                        $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                        $image_2 = false;
                    }
                }
                else
                {
                    echo "image 1 error"."<br>";
                    $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                    $image_2 = false;
                }
            }
            else if($filesize_1 == 0)
            {
                        echo "image 1 empty"."<br>";
                        $image_2 = true;
            }
            else
            {
                echo "image 1 not in array"."<br>";
                $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                $image_2 = false;
                        $path_1 = "products/".$product_id."1".".png";
                        $path_2 = "products/".$product_id."2".".png";
                        $path_3 = "products/".$product_id."3".".png";
                        $path_4 = "products/".$product_id."4".".png";
                        $path_5 = "products/".$product_id."5".".png";

                        unlink($path_1);
                        unlink($path_2);
                        unlink($path_3);
                        unlink($path_4);
                        unlink($path_5);

                        header("location: admin_stocks.php#products");
            }

            if($image_2 == true)
            {
                 $file_2 = $_FILES['image_2_product'];

                    $filename_2 = $_FILES['image_2_product']['name'];
                    $filetmpname_2 = $_FILES['image_2_product']['tmp_name'];
                    $filesize_2 = $_FILES['image_2_product']['size'];
                    $fileerror_2 = $_FILES['image_2_product']['error'];
                    $filetype_2 = $_FILES['image_2_product']['type'];

                    $fileExt_2 = explode(".", $filename_2);
                    $fileActualExt_2 = strtolower(end($fileExt_2));

                    $allowed_2 = array('png');

                    if (in_array($fileActualExt_2, $allowed_2)) {
                        if ($fileerror_2 === 0) {
                            if ($filesize_2 < 3000000) {
                                $filename_new_2 = $product_id."2".".".$fileActualExt_2;
                                $filedest_2 = 'products/'.$filename_new_2;
                                move_uploaded_file($filetmpname_2, $filedest_2);

                                $p_i_d_2 = uniqid().uniqid();
                                $image_number_2 = "2";
                                $sql_image_2 = mysqli_query($con, "INSERT INTO product_image_table (product_image_id, product_id, image_number) VALUES ('$p_i_d_2', '$product_id', '$image_number_2')");
                                $image_3 = true;
                            }
                            else
                            {
                                echo "image 2 file_size error"."<br>";
                                $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                                $image_3 = false;
                            }
                        }
                        else
                        {
                            echo "image 2 error"."<br>";
                            $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                              $image_3 = false;
                        }
                    }
                    else if($filesize_2 == 0)
                    {
                                echo "image 2 empty"."<br>";
                                $image_3 = true;
                    }
                    else
                    {
                        echo "image 2 not in array"."<br>";
                        $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                        $image_3 = false;
                        $path_1 = "products/".$product_id."1".".png";
                        $path_2 = "products/".$product_id."2".".png";
                        $path_3 = "products/".$product_id."3".".png";
                        $path_4 = "products/".$product_id."4".".png";
                        $path_5 = "products/".$product_id."5".".png";

                        unlink($path_1);
                        unlink($path_2);
                        unlink($path_3);
                        unlink($path_4);
                        unlink($path_5);

                        header("location: admin_stocks.php#products");
                    }
            }

            if($image_3 == true)
            {
                $file_3 = $_FILES['image_3_product'];

                    $filename_3 = $_FILES['image_3_product']['name'];
                    $filetmpname_3 = $_FILES['image_3_product']['tmp_name'];
                    $filesize_3 = $_FILES['image_3_product']['size'];
                    $fileerror_3 = $_FILES['image_3_product']['error'];
                    $filetype_3 = $_FILES['image_3_product']['type'];

                    $fileExt_3 = explode(".", $filename_3);
                    $fileActualExt_3 = strtolower(end($fileExt_3));

                    $allowed_3 = array('png');

                    if (in_array($fileActualExt_3, $allowed_3)) {
                        if ($fileerror_3 === 0) {
                            if ($filesize_3 < 3000000) {
                                $filename_new_3 = $product_id."3".".".$fileActualExt_3;
                                $filedest_3 = 'products/'.$filename_new_3;
                                move_uploaded_file($filetmpname_3, $filedest_3);

                                $p_i_d_3 = uniqid().uniqid();
                                $image_number_3 = "3";
                                $sql_image_3 = mysqli_query($con, "INSERT INTO product_image_table (product_image_id, product_id, image_number) VALUES ('$p_i_d_3', '$product_id', '$image_number_3')");
                                $image_4 = true;
                            }
                            else
                            {
                                echo "image 3 file_size error"."<br>";
                                $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                                $image_4 = false;
                            }
                        }
                        else
                        {
                            echo "image 3 error"."<br>";
                            $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                              $image_4 = false;
                        }
                    }
                    else if($filesize_3 == 0)
                    {
                                echo "image 3 empty"."<br>";
                                $image_4 = true;
                    }
                    else
                    {
                        echo "image 3 not in array"."<br>";
                        $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                        $image_4 = false;
                        $path_1 = "products/".$product_id."1".".png";
                        $path_2 = "products/".$product_id."2".".png";
                        $path_3 = "products/".$product_id."3".".png";
                        $path_4 = "products/".$product_id."4".".png";
                        $path_5 = "products/".$product_id."5".".png";

                        unlink($path_1);
                        unlink($path_2);
                        unlink($path_3);
                        unlink($path_4);
                        unlink($path_5);

                        header("location: admin_stocks.php#products");
                    }
            }

            if($image_4 == true)
            {
                $file_4 = $_FILES['image_4_product'];

                    $filename_4 = $_FILES['image_4_product']['name'];
                    $filetmpname_4 = $_FILES['image_4_product']['tmp_name'];
                    $filesize_4 = $_FILES['image_4_product']['size'];
                    $fileerror_4 = $_FILES['image_4_product']['error'];
                    $filetype_4 = $_FILES['image_4_product']['type'];

                    $fileExt_4 = explode(".", $filename_4);
                    $fileActualExt_4 = strtolower(end($fileExt_4));

                    $allowed_4 = array('png');

                    if (in_array($fileActualExt_4, $allowed_4)) {
                        if ($fileerror_4 === 0) {
                            if ($filesize_4 < 3000000) {
                                $filename_new_4 = $product_id."4".".".$fileActualExt_4;
                                $filedest_4 = 'products/'.$filename_new_4;
                                move_uploaded_file($filetmpname_4, $filedest_4);

                                $p_i_d_4 = uniqid().uniqid();
                                $image_number_4 = "4";
                                $sql_image_4 = mysqli_query($con, "INSERT INTO product_image_table (product_image_id, product_id, image_number) VALUES ('$p_i_d_4', '$product_id', '$image_number_4')");
                                $image_5 = true;
                            }
                            else
                            {
                                echo "image 4 file_size error"."<br>";
                                $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                                $image_5 = false;
                            }
                        }
                        else
                        {
                            echo "image 4 error"."<br>";
                            $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                              $image_5 = false;
                        }
                    }
                    else if($filesize_4 == 0)
                    {
                                echo "image 4 empty"."<br>";
                                $image_5 = true;
                    }
                    else
                    {
                        echo "image 4 not in array"."<br>";
                        $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                        $image_5 = false;
                        $path_1 = "products/".$product_id."1".".png";
                        $path_2 = "products/".$product_id."2".".png";
                        $path_3 = "products/".$product_id."3".".png";
                        $path_4 = "products/".$product_id."4".".png";
                        $path_5 = "products/".$product_id."5".".png";

                        unlink($path_1);
                        unlink($path_2);
                        unlink($path_3);
                        unlink($path_4);
                        unlink($path_5);

                        header("location: admin_stocks.php#products");
                    }
            }

            if($image_5 == true)
            {
                $file_5 = $_FILES['image_5_product'];

                    $filename_5 = $_FILES['image_5_product']['name'];
                    $filetmpname_5 = $_FILES['image_5_product']['tmp_name'];
                    $filesize_5 = $_FILES['image_5_product']['size'];
                    $fileerror_5 = $_FILES['image_5_product']['error'];
                    $filetype_5 = $_FILES['image_5_product']['type'];

                    $fileExt_5 = explode(".", $filename_5);
                    $fileActualExt_5 = strtolower(end($fileExt_5));

                    $allowed_5 = array('png');

                    if (in_array($fileActualExt_5, $allowed_5)) {
                        if ($fileerror_5 === 0) {
                            if ($filesize_5 < 3000000) {
                                $filename_new_5 = $product_id."5".".".$fileActualExt_5;
                                $filedest_5 = 'products/'.$filename_new_5;
                                move_uploaded_file($filetmpname_5, $filedest_5);

                                $p_i_d_5 = uniqid().uniqid();
                                $image_number_5 = "5";
                                $sql_image_5 = mysqli_query($con, "INSERT INTO product_image_table (product_image_id, product_id, image_number) VALUES ('$p_i_d_5', '$product_id', '$image_number_5')");

                                $notif_id = uniqid();
                                $notif_desc = $product_desc;
                                $notif_type = 'product';
                                $necessary_id = $product_id;
                                $date_posted = date('Y/m/d');

                                $sql_users = mysqli_query($con, "SELECT * FROM customer_acc_reg");
                                while($sql_users_row = mysqli_fetch_assoc($sql_users))
                                {
                                    $customer_id = $sql_users_row['customer_acc_id'];
                                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");
                                }

                                $sql = mysqli_query($con, "INSERT INTO product_table (product_id, product_name, product_brand, product_category, product_types, product_colors, product_desc, product_date_posted, product_price, product_quantity, admin_id_product) VALUES ('$product_id', '$product_name', '$product_brand', '$product_category', '$product_types', '$product_colors', '$product_desc', '$product_date_posted', $product_price, $product_quantity, '$admin_id_product')");

                                header("location: admin_stocks.php#products");
                            }
                            else
                            {
                                echo "image 5 file_size error"."<br>";
                                $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                            }
                        }
                        else
                        {
                            echo "image 5 error"."<br>";
                            $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                        }
                    }
                    else if($filesize_5 == 0)
                    {
                                echo "image 5 empty"."<br>";

                                $notif_id = uniqid();
                                $notif_desc = $product_desc;
                                $notif_type = 'product';
                                $necessary_id = $product_id;
                                $date_posted = date('Y/m/d');

                                $sql_users = mysqli_query($con, "SELECT * FROM customer_acc_reg");
                                while($sql_users_row = mysqli_fetch_assoc($sql_users))
                                {
                                    $customer_id = $sql_users_row['customer_acc_id'];
                                    $sql_notif = mysqli_query($con, "INSERT INTO notifications (notif_id, notif_desc, notif_type, necessary_id, customer_id, date_posted) VALUES ('$notif_id', '$notif_desc', '$notif_type', '$necessary_id', '$customer_id', '$date_posted')");
                                }

                                $sql = mysqli_query($con, "INSERT INTO product_table (product_id, product_name, product_brand, product_category, product_types, product_colors, product_desc, product_date_posted, product_price, product_quantity, admin_id_product) VALUES ('$product_id', '$product_name', '$product_brand', '$product_category', '$product_types', '$product_colors', '$product_desc', '$product_date_posted', $product_price, $product_quantity, '$admin_id_product')");

                                header("location: admin_stocks.php#products");
                    }
                    else
                    {
                        echo "image 5 not in array"."<br>";
                        $sql_del = mysqli_query($con, "DELETE FROM product_image_table WHERE product_id = '$product_id'");
                        $path_1 = "products/".$product_id."1".".png";
                        $path_2 = "products/".$product_id."2".".png";
                        $path_3 = "products/".$product_id."3".".png";
                        $path_4 = "products/".$product_id."4".".png";
                        $path_5 = "products/".$product_id."5".".png";

                        unlink($path_1);
                        unlink($path_2);
                        unlink($path_3);
                        unlink($path_4);
                        unlink($path_5);

                        header("location: admin_stocks.php#products");
                    }
            }

          //header("location: admin_stocks.php#products");

     }
    
?>