<?php

  session_start();

  if(isset($_POST['sales_logout']))
  {
    setcookie("admin_id", "", time() - 7000000, "/");
    setcookie("admin_type", "", time() - 7000000, "/");
    header("location: admin.php#");
  }
  else if(isset($_POST['ads_logout']))
  {
    setcookie("admin_id", "", time() - 7000000, "/");
    setcookie("admin_type", "", time() - 7000000, "/");
    header("location: admin.php#");
  }
  else if(isset($_POST['stocks_logout']))
  {
    setcookie("admin_id", "", time() - 7000000, "/");
    setcookie("admin_type", "", time() - 7000000, "/");
    header("location: admin.php#");
  }
  else if(isset($_POST['data_logout']))
  {
    setcookie("admin_id", "", time() - 7000000, "/");
    setcookie("admin_type", "", time() - 7000000, "/");
    header("location: admin.php#");
  }
  else if (isset($_POST['logout_customer'])) {
    unset($_SESSION['acc_id']);
    unset($_SESSION['info_id']);
    unset($_SESSION['address_id']);
    header("location: login.php#");
  }

?>