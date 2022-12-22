setInterval(function(){
    var link = window.location.href.split("#");
    var index = window.location.href.split("/");
     
    if(index[4] == "login.php")
    {
    	window.location = "login.php#";
    }
    else if(link[1] == "")
    {
    	var elems = document.getElementsByClassName('first');
		for (var i=0;i<elems.length;i+=1){
		  elems[i].style.display = 'unset';
		}

		var elems = document.getElementsByClassName('second');
		for (var i=0;i<elems.length;i+=1){
		  elems[i].style.display = 'none';
		}

    	document.getElementById("title").innerHTML = "TPM Login";
    }
    else if(link[1] == "reg")
    {
    	var elems = document.getElementsByClassName('first');
		for (var i=0;i<elems.length;i+=1){
		  elems[i].style.display = 'none';
		}

		var elems = document.getElementsByClassName('second');
		for (var i=0;i<elems.length;i+=1){
		  elems[i].style.display = 'unset';
		}

		document.getElementById("title").innerHTML = "TPM Register";
    }
}, 1);

document.getElementById("btn-log").addEventListener("click", function()
{		
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;
	
	if(email == "" && password == "")
	{
		alert("Email and Password are empty!");
	}
	else if(email == "")
	{
		alert("Email is empty!");
	}
	else if(password == "")
	{
		alert("Cannot Log In without Password!");
	}
	else
	{
		window.location.href = "ver_log.php?email=" + email + "&password=" + password;
	}
});

document.getElementById("btn-reg").addEventListener("click", function()
{
	var regemail = document.getElementById("regemail").value;
	var dpass = document.getElementById("dpass").value;
	var cpass = document.getElementById("cpass").value;

	var mnum = document.getElementById("mnum").value;
	var gender = document.getElementById("gender_drop").value;

	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var middlename = document.getElementById("middlename").value;

	var agreeone = document.getElementById("agreeone");
	var agreetwo = document.getElementById("agreetwo");

	var account = Math.random().toString(36).substr(2, 9)+ '_' + Math.random().toString(36).substr(2, 9);
	var ID = Math.random().toString(36).substr(2, 9)+ '_' + Math.random().toString(36).substr(2, 9);
	var username = firstname + "_" + Math.random().toString(36).substr(2, 9);

    if(agreeone.checked == false && agreetwo.checked == false)
    {
    	alert("Please check the boxes!");
    }
    else if(agreeone.checked == false)
    {
    	alert("You have not agreed the Privacy Policy yet!");
    }
    else if(agreetwo.checked == false)
    {
    	alert("You have not accepted the Terms and Conditions yet!");
    }
    else if(agreeone.checked == true && agreetwo.checked == true)
    {
		if(dpass != "" && cpass != "")
		{
			if(dpass != cpass)
			{
				alert("Make sure that Desired Password is confirmed!");
			}
			else if(dpass == cpass)
			{
	             window.location.href = "ver_reg.php?account=" + account + "&username=" + username.replace(/\s/g,'') + "&acc_id=" + ID + "&email=" + regemail + "&password=" + dpass + "&mobile_number=" + mnum + "&firstname=" + firstname + "&lastname=" + lastname + "&middlename=" + middlename + "&gender=" + gender;
			}
		}
		else
		{
			alert("Please fill up the password!");
		}
	}
});

