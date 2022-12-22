$(document).ready(function(){


     setTimeout(function(){
           setInterval(function(){
		     	var label = document.getElementById('label_page').innerHTML = 'Introducing..';
		             $('#load').animate({
		              color: '#565656'
				     }, 1000, function(){
				     	$('#load').animate({
				     		color: 'white'
				     	}, 1000);
				     });

		             $('#label_page').animate({
		              color: '#565656'
				     }, 1000, function(){
				     	var label = document.getElementById('label_page').innerHTML = 'Introducing...';
				     	$('#label_page').animate({
				     		color: 'white'
				     	}, 1000);
				     });
		     }, 2000);

		     var percent = 1;
		     setInterval(function(){
		            if (percent == 101) 
		             {
		             	$('#div_load').hide(2000, function(){
		             		//window.location = 'dev/index.php';
		             		$('#content').show(1000, function(){
		             			$('#devteam_label').animate({
                                        opacity: '1'
		             			}, 2000, function(){
		             				setTimeout(function(){
		             					$('#content').animate({
                                               opacity: '0'
		             					},2000, function(){
		             						window.location = 'dev/index.php';
		             					});
		             				},1000);
		             					
		             			});
		             		});
		             	});
		             }
		             else
		             {
		             	var load_per = document.getElementById('load').innerHTML = percent+++"%";
		             }
		     },100);

     },1000);


});