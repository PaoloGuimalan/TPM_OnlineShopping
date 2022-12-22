<!DOCTYPE html>
<head>
	<title>
		Person
	</title>
	<link rel="stylesheet" type="text/css" href="css/person_background.css">
	<script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/jquery-ui.js"></script>
    <script src="../js/jquery.animate-shadow.js"></script>
    <script src="js/person_background.js"></script>
</head>

<?php

       session_start();

       $con = new mysqli("localhost", "root", "", "tpm_database");

       $dev_id = $_GET['dev_id'];

       $sql = mysqli_query($con, "SELECT * FROM developers WHERE dev_id = '$dev_id'");
       $sql_row = mysqli_fetch_array($sql);

       $dev_ext_id = $sql_row['dev_ext_id'];
       $dev_ph_id = $sql_row['dev_ph_id'];
       $dev_sk_id = $sql_row['dev_sk_id'];

       $sql2 = mysqli_query($con, "SELECT * FROM developers_ext WHERE dev_ext_id = '$dev_ext_id'");
       $sql2_row = mysqli_fetch_array($sql2);

?>

<body>
  <div id='first_all'>
	<div id="first_section">
		<img src="../images/div_bg.jpg" id="img_back">
		<div id="shade">
			<img src="profile_pics/<?php echo $sql_row['dev_id'];?>.jpg" id="img_handler">
			<table id="tbl_main">
				<tr>
					<td>
						<p id="fname"><?php echo $sql_row['dev_fullname'];?></p>
					</td>
				</tr>
				<tr>
					<td>
						<span id="role"><?php echo $sql_row['dev_role'];?> | </span><span id="email"><?php echo $sql_row['dev_email'];?></span>
					</td>
				</tr>
			</table>
		</div>
	</div>

	<div id="frame">
		
	</div>
</div>

<div id="second_all">
	<div id="firstSec_section">
		<img src="profile_pics/<?php echo $sql_row['dev_id'];?>.jpg" id="img_handler_sec">
		<img src="../images/div_bg.jpg" id="img_back_sec">
		<table id="tbl_data">
			<tr>
				<td>
				     <p style="font-family: fantasy;">Education</p>
				</td>
			</tr>
		</table>
		<table id="tbl_data_2">
			<tr>
				<td>
				      <p style="font-family: fantasy;">Profession</p>
				</td>
			</tr>
		</table>
		<table id="tbl_data_3">
			<tr>
				<td>
				       <p style="font-family: fantasy;">Achievements</p>
				</td>
			</tr>
		</table>
		<table id="tbl_data_3x">
			<tr>
				<td>
				       <p style="font-family: fantasy;">Certification</p>
				</td>
			</tr>
		</table>

		<table id="tbl_data_4">
			<tr>
				<td>
				     <p><?php echo $sql2_row['dev_gender']; ?></p>
				</td>
			</tr>
		</table>
		<table id="tbl_data_5">
			<tr>
				<td>
				      <p><?php echo $sql2_row['dev_age']?></p>
				</td>
			</tr>
		</table>
		<table id="tbl_data_6">
			<tr>
				<td>
				       <p><?php echo $sql2_row['dateofb_dev']; ?></p>
				</td>
			</tr>
		</table>
		<table id="tbl_data_6x">
			<tr>
				<td>
				       <p><?php echo $sql2_row['dev_cs']; ?></p>
				</td>
			</tr>
		</table>
	</div>
</div>

<div id="third_all">
	<div id="firstTh_section">
		<img src="profile_pics/<?php echo $sql_row['dev_id'];?>.jpg" id="img_handler_th">
		<img src="../images/div_bg.jpg" id="img_back_th">

		<table id="tbl_three">
			<tr>
				<td>
					<p>Philosophy</p>
				</td>
			</tr>
		</table>
		<table id="tbl_1">
			<?php

                             $sql_phil = mysqli_query($con, "SELECT * FROM dev_phils WHERE dev_ph_id = '$dev_ph_id'");
                             while($sql_phil_row = mysqli_fetch_assoc($sql_phil))
                             {
                             	echo 
                             	'
                                      <tr id="margins">
																					<td>
																					     <p>"'.$sql_phil_row["dev_ph_content"].'"</p>
																					</td>
																		  </tr>
                             	';
                             }

			?>
		</table>
	</div>
</div>

<div id="fourth_all">
	     <table id="tbl_last">
	     	      <tr>
	     	      	  <td>
	     	      	  	  <p id="skills_label">Skills</p>
	     	      	  </td>
	     	      </tr>
	     	      <?php

	     	          $num = 1;

                  $sql_last = mysqli_query($con, "SELECT * FROM dev_skills WHERE dev_sk_id = '$dev_sk_id'");
                  while($sql_last_row = mysqli_fetch_assoc($sql_last))
                  {

                        echo 
                        "
                            <tr>
								     	      	  <td class='td_l'>
								     	      	  	  <span id='value_label'>".$sql_last_row['dev_sk_info']."</span>
								     	      	  </td>
								     	      	  <td class='td_l'>
								     	      	  	  <div class='value_levelhand'><div class='value_level' id='lvl".$num++."' data-panel='".$sql_last_row['dev_sk_perc']."'></div></div>
								     	      	  </td>
								     	      </tr>
                        ";

                  }

                  $sql_count = mysqli_query($con, "SELECT count(dev_sk_perc) as perc FROM dev_skills WHERE dev_sk_id = '$dev_sk_id'");
                  	$sql_count_row = mysqli_fetch_array($sql_count);


                  	echo 
                        "
								     	      <input type='hidden' id='number' value='".$sql_count_row['perc']."'>
                        ";


	     	      ?>
	     </table>
</div>
	
</body>
</html>