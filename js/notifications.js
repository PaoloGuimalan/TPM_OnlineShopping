$(document).ready(function(){

     $('#home_btn').click(function(){
           window.location = "index.php";
     });

       setInterval(function(){
           var link = window.location.href.split('#');

           if(link.length == 1)
           {
               window.location.href = 'notifications.php#orders';
           }

           if (link[1] == 'orders') 
           {
               $('#orders_div').show(500); 
               $('#updates_div').hide(500); 
               $('#news_div').hide(500);                   
           }
           else if (link[1] == 'updates') 
           {
           	   $('#updates_div').show(500); 
               $('#news_div').hide(500);   
               $('#orders_div').hide(500);                         
           }
           else if (link[1] == 'news') 
           { 
               $('#news_div').show(500);    
               $('#orders_div').hide(500); 
               $('#updates_div').hide(500);                         
           }
         },1);

     $('#head_ul').animate({
             height: '100%'
     },500, function(){
          $('#logo_header').animate({
             height: '75px'
          },500, function(){
               $('#value_username').animate({
                   fontSize: '15px'
               },500, function(){
                    $('.btns').animate({
                           fontSize: '13px',
                           height: '25px'
                    },500, function(){
                         $('#label_expense').animate({
                                 fontSize: '13px',
                                 height: '25px'
                         },500);
                    });
               });
          });
     });

//btns

      $('#orders_btn').click(function(){
           window.location.href = 'notifications.php#orders';
      }); 

      $('#updates_btn').click(function(){
           window.location.href = 'notifications.php#updates';
      }); 

      $('#news_btn').click(function(){
           window.location.href = 'notifications.php#news';
      });     

});