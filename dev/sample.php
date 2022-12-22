<!DOCTYPE html>
<head>
	<title>
		Person
	</title>
	<link rel="stylesheet" type="text/css" href="css/person_background.css">
</head>

<?php

       session_start();

       $con = new mysqli("localhost", "root", "", "tpm_database");

       $sql = mysqli_query($con, "SELECT * FROM developers WHERE dev_id = 'dev_1'");
       $sql_row = mysqli_fetch_array($sql);

       $dev_ext_id = $sql_row['dev_ext_id'];
       $dev_ph_id = $sql_row['dev_ph_id'];

       $sql2 = mysqli_query($con, "SELECT * FROM developers_ext WHERE dev_ext_id = '$dev_ext_id'");
       $sql2_row = mysqli_fetch_array($sql2);

?>	

<body>
  

<div id="fourth_all">
	     <table id="tbl_last">
	     	      <tr>
	     	      	  <td>
	     	      	  	  <p id="skills_label">Skills</p>
	     	      	  </td>
	     	      </tr>
	     </table>
</div>
	
</body>
</html>