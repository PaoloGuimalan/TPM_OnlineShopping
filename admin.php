<!DOCTYPE html>
<head>
	<title id="title">Admin Page</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>


<body>
	<div class="first">
	<div class="handler">
	<div class="container">
		<table class="logo-table">
			<tr>
				<td>
					<p class="admin_label">Admin</p>
				</td>
			</tr>
			
			<tr>
				<td>
					<center><input type="text" name="email" placeholder="Email" class="textbox" id="email"></center>
				</td>
			</tr>
			<tr>
				<td>
					<center><input type="password" name="password" placeholder="Password" class="textbox" id="password"></center>
				</td>
			</tr>
			<tr>
				<td>
					<input type="checkbox" name="save-acc" class="checkbox"><div class="text">Remember Me</div>
				</td>
			</tr>
			<tr>
				<td>
					<center><input type="submit" name="confirm-login" class="btn" value="LOG IN" id="btn-log"></center>
				</td>
			</tr>
			<tr>
				<td>
					<div class="text2">If you do not have an existing account,</div>
				</td>
			</tr>
			<tr>
				<td>
					<div class="text3"><a href="#reg" id="reglink">Register here</a></div>
				</td>
			</tr>
		</table>
	</div>
	</div>
</div>

<div class="second">
	<div class="handler-reg">
    <div class="form-reg">
        <div class="formtexts">
        	<table class="table-reg">
        		<tr>
				<td>
					<p class="admin_label">Admin</p>
				</td>
			    </tr>
	    		<tr>
	    			<td><p style="text-align: center;">Account Name</p></td>
	    		</tr>
	    		<tr>
	    			<td><input type="text" name="lastname" placeholder="Last Name" class="reg-form-box" id="lastname"></td>
	    		</tr>
	    		<tr>
	    			<td><input type="text" name="firstname" placeholder="First Name" class="reg-form-box" id="firstname"></td>
	    		</tr>
	    		<tr>
	    			<td><input type="text" name="middlename" placeholder="Middle Name (Optional)" class="reg-form-box" id="middlename"></td>
	    		</tr>
	    		<tr>
	    			<td><p style="text-align: center;">Email</p></td>
	    		</tr>
	    		<tr>
	    			<td><input type="text" name="email" placeholder="ex: johndoe@gmail.com" class="reg-form-box" id="regemail"></td>
	    		</tr>
	    		<tr>
	    			<td><p style="text-align: center;">Password</p></td>
	    		</tr>
	    		<tr>
	    			<td><input type="password" name="desired-password" placeholder="Desired Password" class="reg-form-box" id="dpass"></td>
	    		</tr>
	    		<tr>
	    			<td><input type="password" name="confirm-password" placeholder="Confirm Password" class="reg-form-box" id="cpass"></td>
	    		</tr>
	    		<tr>
	    			<td><p style="text-align: center;">Departement</p></td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<select id="department" class="reg-form-box">
	    				      <option value="sales">Sales Departement</option>
	    				      <option value="advertisment">Advertisment Departement</option>
	    				      <option value="stocks">Stocks Departement</option>
	    				      <option value="data">Data/Media Departement</option>
	    				</select>
	    			</td>
	    		</tr>
    		</table>
        </div>
    	
		<div class="container-reg">
			<table class="logo-table">
				<tr>
					<td>
						<img src="images/logo.png" class="logo-reg">
					</td>
				</tr>
				
				<tr>
					<td>
						<center><input type="submit" name="confirm-register" class="btn-two" value="CONFIRM" id="btn-reg"></center>
					</td>
				</tr>
				<tr>
					<td>
						<div class="text2-reg">Already have an account? <div class="text3-reg"><a href="#" id="loglink">Log In here.</a></div></div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	</div>
</div>

<?php

     if(isset($_COOKIE['admin_id']))
     {
     	if($_COOKIE['admin_type'] == 'sales')
     	{
             header("location: admin_sales.php");
     	}
     	else if($_COOKIE['admin_type'] == 'advertisment')
     	{
             header("location: admin_ads.php");
     	}
     	else if($_COOKIE['admin_type'] == 'stocks')
     	{
             header("location: admin_stocks.php");
     	}
     	else if($_COOKIE['admin_type'] == 'data')
     	{
             header("location: data_admin.php");
     	}
     }

?>



<script src="js/admin.js"></script>	
</body>
</html>