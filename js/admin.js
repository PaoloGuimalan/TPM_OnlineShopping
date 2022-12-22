setInterval(function(){
    var link = window.location.href.split("#");
    var index = window.location.href.split("/");
     
    if(index[4] == "admin.php")
    {
    	window.location = "admin.php#";
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

    	document.getElementById("title").innerHTML = "Admin Login";
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

		document.getElementById("title").innerHTML = "Admin Register";
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
		window.location.href = "ver_log_admin.php?email=" + email + "&password=" + password;
	}
});

document.getElementById("btn-reg").addEventListener("click", function()
{
	var regemail = document.getElementById("regemail").value;
	var dpass = document.getElementById("dpass").value;
	var cpass = document.getElementById("cpass").value;

	var department = document.getElementById("department").value;

	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var middlename = document.getElementById("middlename").value;

	var account = Math.random().toString(36).substr(2, 9)+ '_' + Math.random().toString(36).substr(2, 9);
	var ID = Math.random().toString(36).substr(2, 9)+ '_' + Math.random().toString(36).substr(2, 9);

    
		if(dpass != "" && cpass != "")
		{
			if(dpass != cpass)
			{
				alert("Make sure that Desired Password is confirmed!");
			}
			else if(dpass == cpass)
			{
	             window.location.href = "ver_reg_admin.php?account=" + account + "&acc_id=" + ID + "&email=" + regemail + "&password=" + dpass + "&department=" + department + "&firstname=" + firstname + "&lastname=" + lastname + "&middlename=" + middlename;
			}
		}
		else
		{
			alert("Please fill up the password!");
		}
});

