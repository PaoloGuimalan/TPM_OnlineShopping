<!DOCTYPE html>

<head>
	<title>Advertisment Department</title>
	<link rel="stylesheet" type="text/css" href="css/admin_ads.css">
	<header class="head">ADVERTISMENT DEPARTMENT</header>
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
                         <input type="submit" id='active_ads' name="ads_active" value="ACTIVE ADS" onclick="active();">
                   </td>
                   <td>
                         <input type="submit" id='inactive_ads' name="ads_inactive" value="INACTIVE ADS" onclick="inactive();">
                   </td>
       	    	    <td>
       	    	    	     <form method="POST" action="">
						<input type="submit" name="ads_profile" value="PROFILE">
					</form>
       	    	    </td>
       	    	    <td>
       	    	    	     <form method="POST" action="logout.php">
						<input type="submit" name="ads_logout" value="LOG OUT">
					</form>
       	    	    </td>
       	    </tr>
       	    
       </table>
</div>

<div class="second_div">
	<table class="tbl">
       	     <tr>
       	    	    <td class="support_update_insert">
       	    	    	    <div class="update_insert_table">
       	    	    	    	     <table>
       	    	    	    	     	<tr>
                                        <td>
                                             <p id='label_ads'></p>
                                       </td>
                                  </tr>
                                  <tr>
       	    	    	    	     		<td>
       	    	    	    	     			<form action="validate_admin_request.php" method="POST" enctype="multipart/form-data">
       	    	    	    	     			<input type="file" name="file">
       	    	    	    	     			<input type="hidden" name="ad_id" value = "<?php echo uniqid(); ?>">
       	    	    	    	     			<input type="hidden" name="admin_id" value = "<?php echo $_COOKIE['admin_id']; ?>">
       	    	    	    	     		</td>
       	    	    	    	     	</tr>
       	    	    	    	     	<tr>
       	    	    	    	     		<td>
       	    	    	    	     			<label for="ad_title">Advertisment Title:</label>
									<input type="text" name="ad_title" id="ad_title" placeholder="Advertisment Title">
       	    	    	    	     		</td>
       	    	    	    	     	</tr>
       	    	    	    	     	<tr>
       	    	    	    	     		<td>
       	    	    	    	     			<label for="w3review">Advertisment Descricption:</label>
									<textarea id="w3review" name="w3review" rows="10" cols="50"></textarea>
       	    	    	    	     		</td>
       	    	    	    	     	</tr>
                                   <tr>
                                        <td>
                                             <label for="ad_link">Advertisment Link:</label>
                                             <input type="text" name="ad_link" id="ad_link" placeholder="Put link if applicable">
                                        </td>
                                   </tr>
       	    	    	    	     	<tr>
       	    	    	    	     		<td>
       	    	    	    	     			<input type="submit" name="save_admin_ad" value="SAVE">
       	    	    	    	     			</form>
       	    	    	    	     		</td>
       	    	    	    	     	</tr>
       	    	    	    	     	<tr>
       	    	    	    	     		<td>
	       	    	    	    	     		<form action="admin_ads.php" method="POST">
	       	    	    	    	     				<input type="submit" name="cancel" value="CANCEL">
	       	    	    	    	     		</form>
	       	    	    	    	     	</td>
       	    	    	    	     	</tr>
       	    	    	    	     </table>
       	    	    	    </div>
       	    	    </td>
       	    	    <td id = 'result_ads_active'>
       	    	    	    	     <?php
                                   
                                   $sql = mysqli_query($con, "SELECT * FROM ads_table WHERE activity_status = 'on'");
                                   while($sqlrow = mysqli_fetch_assoc($sql))
                                   {
                                   	echo 
                                        "<div class='output_table'>
                                            <table>
                                                <tr>
                                                    <td>
                                                         <img src='ads_uploads/".$sqlrow['ad_id_file'].".png' id='image_ads'>
                                                    </td>
                                                    <td>
                                                         <p style='font-family:fantasy;'>Advertisment Title: ".$sqlrow['ad_title']."</p>
                                                         <p>Advertisment Description: </p>".$sqlrow['ad_desc']."
                                                         <p>Advertisment Link: </p><a href='".$sqlrow['ad_link']."'>".$sqlrow['ad_link']."</a>
                                                         <p>Date Posted: ".$sqlrow['date_posted']."</p>
                                                         <p>Posted By: ".$sqlrow['admin_id']."</p>
                                                         <form action='validate_admin_request.php' method='POST'>
                                                         <input type = 'hidden' name='turn_off_value' value='".$sqlrow['id']."'>
                                                         <button id='turn_off_button' name='turn_off_button'>Turn off ad</button>
                                                         </form>
                                                    </td>
                                                </tr>
                                             </table>
                                   	</div>";
                                   }

       	    	    	    	     ?>
       	    	    </td>
                   <td id = 'result_ads_inactive'>
                              <?php
                                   
                                   $sql = mysqli_query($con, "SELECT * FROM ads_table WHERE activity_status = 'off'");
                                   while($sqlrow = mysqli_fetch_assoc($sql))
                                   {
                                        echo 
                                        "<div class='output_table'>
                                            <table>
                                                <tr>
                                                    <td>
                                                         <img src='ads_uploads/".$sqlrow['ad_id_file'].".png' id='image_ads'>
                                                    </td>
                                                    <td>
                                                         <p style='font-family:fantasy;'>Advertisment Title: ".$sqlrow['ad_title']."</p>
                                                         <p>Advertisment Description: </p>".$sqlrow['ad_desc']."
                                                         <p>Date Posted: ".$sqlrow['date_posted']."</p>
                                                         <p>Posted By: ".$sqlrow['admin_id']."</p>
                                                         <form action='validate_admin_request.php' method='POST'>
                                                         <input type = 'hidden' name='turn_on_value' value='".$sqlrow['id']."'>
                                                         <button id='turn_on_button' name='turn_on_button'>Turn on ad</button>
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



<script type="text/javascript" src="js/admin_ads.js"></script>

</body>
</html>