setInterval(function(){

   var link = window.location.href.split('#');
   
   if(link[1] == 'on')
   {
   	   var active = document.getElementById('result_ads_active').style.display = 'unset';
   	   var inactive = document.getElementById('result_ads_inactive').style.display = 'none';
   	   var label = document.getElementById('label_ads').innerHTML = "Active Ads";
   }
   else if(link[1] == 'off')
   {
   	   var inactive = document.getElementById('result_ads_inactive').style.display = 'unset';
   	   var active = document.getElementById('result_ads_active').style.display = 'none';
   	   var label = document.getElementById('label_ads').innerHTML = "Inactive Ads";
   }

},500);

function active()
{
    window.location = "admin_ads.php#on"
}

function inactive()
{
	window.location = "admin_ads.php#off"
}