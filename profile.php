<!DOCTYPE html>
<head>
    <title id="title">Profile</title>
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.69">
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.animate-shadow.js"></script>
     <script src="js/profile.js"></script>
</head>

<body>
    <?php

    session_start();

    $customer_acc_id = $_SESSION['acc_id'];
    $customer_info_id = $_SESSION['info_id'];
    $customer_address_id = $_SESSION['address_id'];

    if (empty($customer_acc_id)) 
           {
                 header("location: logged_out.php");    
           }

    $con = new mysqli("localhost", "root", "", "tpm_database");

    $sql = mysqli_query($con, "SELECT * FROM customer_acc_reg WHERE customer_acc_id = '$customer_acc_id'");
    $sqlrow = mysqli_fetch_array($sql);

    $sql_info = mysqli_query($con, "SELECT * FROM customer_info_reg WHERE customer_id = '$customer_info_id'");
    $sqlrow_info = mysqli_fetch_array($sql_info);

    $sql_add = mysqli_query($con, "SELECT * FROM customer_address WHERE customer_address_id = '$customer_address_id'");
    $sqlrow_add = mysqli_fetch_array($sql_add);

    echo "<input type='hidden' name='title_value' id='title_value' value='".$sqlrow['cust_username']."'>";
    echo "<input type='hidden' name='add_id' id='add_id' value='".$customer_address_id."'>";

    /*if(empty($customer_acc_id))
    {
        header("location: index.php");
    }
    else
    {
        echo $customer_acc_id;
    }*/

   ?>

<header>
        <img src="images/default_profile.png" id="default_img">
        <img src="images/logo_header.png" id="logo_header">
        <p id="username_label"><?php echo $sqlrow['cust_username'];?></p>
</header>

<div>
    <button id='btn_home'>HOME</button>
</div>

<div id="div_content_profile">
    <ul>
        <li>
            <table id="info_tbl">
                <tr>
                    <td>
                        <p class="labels">Firstname</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_info['cust_firstname'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Lastname</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_info['cust_lastname'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Middlename</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_info['cust_middlename'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Mobile Numer</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow['cust_contactnum'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Gender</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_info['gender'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Birth Date</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_info['date_of_birth'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Birth Place</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_info['birth_place'];?></p>
                    </td>
                </tr>
            </table>
        </li>
        <li>
            <table id="add_tbl">
                <tr>
                    <td>
                        <p id='main_add_label'>Address</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="labels">House No.</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_add['house_no'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Street</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_add['street'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Barangay</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_add['barangay'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">City / Town</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_add['city_town'];?></p>
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Region</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="data"><?php echo $sqlrow_add['region'];?></p>
                    </td>
                </tr>
                <tr>
                    <td class="td_input">
                        <button id="edit_add">EDIT</button>
                    </td>
                </tr>
            </table>
        </li>



        <li>
            <table id="edit_tbl">
                <tr>
                    <td>
                        <p id='main_edit_label'>Edit Address</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="labels">House No.</p>
                    </td>
                </tr>
                <tr>
                    <td class="td_input">
                        <input type="text" name="house_no" id='house_no' class="input" placeholder="ex. 926" value="<?php echo $sqlrow_add['house_no']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Street</p>
                    </td>
                </tr>
                <tr>
                    <td class="td_input">
                        <input type="text" name="street" id='street' class="input" placeholder="Street you are living in" value="<?php echo $sqlrow_add['street']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Barangay</p>
                    </td>
                </tr>
                <tr>
                    <td class="td_input">
                        <input type="text" name="barangay" id='barangay' class="input" placeholder="Barangay" value="<?php echo $sqlrow_add['barangay']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">City / Town</p>
                    </td>
                </tr>
                <tr>
                    <td class="td_input">
                        <input type="text" name="city_town" id='city_town' class="input" placeholder="It could be city or town" value="<?php echo $sqlrow_add['city_town']?>">
                    </td>
                </tr>

                <tr>
                    <td>
                        <p class="labels">Region</p>
                    </td>
                </tr>
                <tr>
                    <td class="td_input">
                        <input type="text" name="region" id='region' class="input" placeholder="ex. NCR" value="<?php echo $sqlrow_add['region']?>">
                    </td>
                </tr>
                <tr>
                    <td class="td_input">
                        <button id="confirm_add">CONFIRM</button><button id="cancel_add">CANCEL</button>
                    </td>
                </tr>
            </table>
        </li>
    </ul>
</div>


</body>
</html>