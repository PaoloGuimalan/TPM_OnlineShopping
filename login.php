<!DOCTYPE html>

<?php

   session_start();


?>
<head>
	<title id="title">TPM</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<div class="first">
	<div class="handler">
	<div class="container">
		<table class="logo-table">
			<tr>
				<td>
					<img src="images/logo.png" class="logo">
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
	    			<td><p style="text-align: center;">Mobile Number</p></td>
	    		</tr>
	    		<tr>
	    			<td><input type="text" name="m-number" placeholder="ex: 09123847519" class="reg-form-box" id="mnum"></td>
	    		</tr>
	    		<tr>
	    			<td><p style="text-align: center;">Gender</p></td>
	    		</tr>
	    		<tr>
	    			<td>
	    				<select class="reg-form-box" id="gender_drop">
	    					<option value="Male">Male</option>
	    					<option value="Female">Female</option>
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
						<input type="checkbox" name="agree-one" class="checkboxreg" id="agreeone"><div class="text">I agree with the Privacy Policy.</div>
					</td>
				</tr>
				<tr>
					<td>
						<input type="checkbox" name="agree-two" class="checkboxreg" id="agreetwo"><div class="text">I accept the Terms and Conditions.</div>
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



<script src="js/login.js"></script>	

</body>


</html>