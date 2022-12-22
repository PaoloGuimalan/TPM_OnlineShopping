<?php
 
    $con = new mysqli("localhost", "root", "", "tpm_database");

    session_start();

    $admin_id = $_SESSION['admin_id'];

    $sql = mysqli_query($con, "SELECT admin_type FROM admin_info_reg WHERE admin_id = '$admin_id'");
    $sqlrow = mysqli_fetch_array($sql);

    if($sqlrow['admin_type'] == 'sales')
    {
        $admin_type = $sqlrow['admin_type'];
        setcookie("admin_id", $admin_id, time()+31556926 ,'/');
        setcookie("admin_type", $admin_type, time()+31556926 ,'/');
        header("location: admin_sales.php");
    }
    else if($sqlrow['admin_type'] == 'advertisment')
    {
        $admin_type = $sqlrow['admin_type'];
        setcookie("admin_id", $admin_id, time()+31556926 ,'/');
        setcookie("admin_type", $admin_type, time()+31556926 ,'/');
        header("location: admin_ads.php");
    }
    else if($sqlrow['admin_type'] == 'stocks')
    {
        $admin_type = $sqlrow['admin_type'];
        setcookie("admin_id", $admin_id, time()+31556926 ,'/');
        setcookie("admin_type", $admin_type, time()+31556926 ,'/');
        header("location: admin_stocks.php");
    }
    else if($sqlrow['admin_type'] == 'data')
    {
        $admin_type = $sqlrow['admin_type'];
        setcookie("admin_id", $admin_id, time()+31556926 ,'/');
        setcookie("admin_type", $admin_type, time()+31556926 ,'/');
        header("location: data_admin.php");
    }
    else
    {
        ?>
               <script>
                   alert("Unable to determine account!")
               </script>
        <?php
    }

?>