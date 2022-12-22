<?php

  session_start();

  $con = new mysqli("localhost", "root", "", "tpm_database");

  $code = $_GET['code'];
  $name = $_GET['name'];
  $email = $_GET['email'];

  $edited_value = $_GET['edited_value'];

  $nmm = $_GET['name'];

  $name_user = $_GET['name_user'];
  $content = $_GET['content'];
  $date_posted = date("Y/m/d");


  if ($code =='1') {
  	$sql = mysqli_query($con, "INSERT INTO testimony_acc (name, email) VALUES ('$name','$email')");
  	$_SESSION['name'] = $name;
  	$_SESSION['email'] = $email;
  	header("location: index.php");
  }

  else if ($code =='2') {
  	$sql = mysqli_query($con, "SELECT * FROM testimony_acc WHERE name = '$name' AND email='$email'");
  	$sql_row = mysqli_fetch_array($sql);
  	
  	if($sql_row['name'] == $name && $sql_row['email'] == $email)
  	{
  		$_SESSION['name'] = $sql_row['name'];
	  	$_SESSION['email'] = $sql_row['email'];
	  	header("location: index.php");
  	}
  	else
  	{
  		$_SESSION['name'] = 'none';
	  	$_SESSION['email'] = 'none';
	  	header("location: index.php");
  	}
  }

  else if ($code =='3') {
  	$sql = mysqli_query($con, "INSERT INTO testimonies (name, content, date_posted) VALUES ('$name_user','$content', '$date_posted')");
  	header("location: index.php");
  }

  else if($code == '4')
  {
    $sql = mysqli_query($con, "DELETE FROM testimonies WHERE name = '$name'");
    header("location: index.php");
  }

  else if($code == '5')
  {
    $sql = mysqli_query($con, "UPDATE testimonies SET content = '$edited_value' WHERE name = '$name'");
    header("location: index.php");
  }

  else if($code == '7')
  {
    $sql = mysqli_query($con, "DELETE FROM testimonies WHERE name = '$nmm'");
    header("location: ../data_admin.php#reviews");
    //echo $nmm;
  }


?>