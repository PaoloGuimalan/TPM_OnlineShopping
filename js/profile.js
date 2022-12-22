$(document).ready(function(){

      var title_value = document.getElementById('title_value').value;
      var title = document.getElementById('title').innerHTML = "Profile | "+title_value;

     setTimeout(function(){
     	$('#default_img').animate({height: '150px'}, 500, function(){
     	$('#info_tbl').show(1000);
	     $('#username_label').animate({fontSize: '25px'}, 500, function(){
	     	$('#add_tbl').show(1000, function(){
	     	$('.labels').animate({fontSize: '15px'},1000, function(){
	     		 $('#main_add_label').animate({fontSize: '20px'}, 1000);
	                 $('.data').animate({fontSize: '15px'}, 1000);
	     	});
	     });
       });
     });
     },500);

//boundary



           $('#confirm_add').click(function(){
                  var address_id = document.getElementById('add_id').value;

                  var house_no = document.getElementById('house_no').value;
                  var street = document.getElementById('street').value;
                  var barangay = document.getElementById('barangay').value;
                  var city_town = document.getElementById('city_town').value;
                  var region = document.getElementById('region').value;

                  var command_number = 1;
                  window.location.href = "validate_user.php?customer_address_id="+address_id+"&house_no="+house_no+"&street="+street+"&barangay="+barangay+"&city_town="+city_town+"&region="+region+"&command_number="+command_number;
           });



//boundary

     $('#edit_add').click(function(){
           $('#add_tbl').hide(500, function(){
           	      $('#edit_tbl').show(500);
           });
     });

     $('#cancel_add').click(function(){
           $('#edit_tbl').hide(500, function(){
           	      $('#add_tbl').show(500);
           });
     });


     $('#btn_home').mouseenter(function(){
     	$('#btn_home').animate({
     		    color: 'white',
     		    backgroundColor: '#000000',
                width: '250px'
     	},100);
     });

     $('#btn_home').mouseleave(function(){
     	$('#btn_home').animate({
     		    color: 'black',
     		    backgroundColor: 'white',
                width: '150px'
     	},100);
     });

     $('#btn_home').click(function(){
           window.location = "index.php";
     });



});