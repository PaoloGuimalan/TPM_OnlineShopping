<!DOCTYPE html>
<head>
	<title>Preview</title>
	<link rel="stylesheet" type="text/css" href="css/ads_preview.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.69">
     <script src="js/jquery-3.6.0.min.js"></script>
     <script src="js/jquery-ui.js"></script>
     <script src="js/jquery.animate-shadow.js"></script>
     <script src="js/ads_preview.js"></script>
</head>

<body>

    <?php

    session_start();

    $con = new mysqli("localhost", "root", "", "tpm_database");

    $ads = $_GET['ad_id'];

    $sql = mysqli_query($con, "SELECT * FROM ads_table WHERE id = '$ads'");
    $sql_row = mysqli_fetch_array($sql);

    ?>

    <div id="ad_img">
    	<img id="ad_img_val" src='ads_uploads/<?php echo $sql_row["ad_id_file"]?>.png'><p id="ad_label"><?php echo $sql_row["ad_title"]?></p></img>
    </div>
    <div id="ad_content">
    	<table id="tbl_content">
    		<tr>
    			<th>
    				<p id="content_label">Description</p><p id="back_btn"><a href="index.php" id="back_link">Home</a></p>
    			</th>
    		</tr>
    		<tr>
    			<td>
    				<?php echo $sql_row["ad_desc"]?>
    			</td>
    		</tr>
    		<tr>
    			<th>
    				<p id="content_label">Date Posted</p>
    			</th>
    		</tr>
    		<tr>
    			<td>
    				<?php echo $sql_row["date_posted"]?>
    			</td>
    		</tr>
    		<tr>
    			<th>
    				<p id="content_label">Link</p>
    			</th>
    		</tr>
    		<tr>
    			<td>
    				Visit: <a href="<?php echo $sql_row['ad_link']?>"><?php echo $sql_row["ad_link"]?></a>
    			</td>
    		</tr>
    	</table>
    </div>

</body>
</html>