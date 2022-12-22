$(document).ready(function(){

     $('#home_btn').click(function(){
           window.location = "index.php";
     });

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
                         },500, function(){
                              setInterval(function(){
                                   var link = window.location.href.split('#');

                                   if(link.length == 1)
                                   {
                                        window.location.href = 'cart.php#cart';
                                   }

                                   if (link[1] == 'cart') 
                                   {
                                        $('#cart_div').show(500);
                                        $('#expense_tracker_div').hide(500);
                                        $('#pending_div').hide(500);
                                        $('#od_div').hide(500);
                                        $('#d_div').hide(500);
                                        $('#c_div').hide(500);
                                   }
                                   else if (link[1] == 'pending') 
                                   {
                                        $('#pending_div').show(500);
                                        $('#expense_tracker_div').hide(500);
                                        $('#cart_div').hide(500);
                                        $('#od_div').hide(500);
                                        $('#d_div').hide(500);
                                        $('#c_div').hide(500);
                                   }
                                   else if (link[1] == 'on_delivery') 
                                   {
                                        $('#od_div').show(500);
                                        $('#expense_tracker_div').hide(500);
                                        $('#cart_div').hide(500);
                                        $('#pending_div').hide(500);
                                        $('#d_div').hide(500);
                                        $('#c_div').hide(500);
                                   }
                                   else if (link[1] == 'delivered') 
                                   {
                                        $('#d_div').show(500);
                                        $('#expense_tracker_div').hide(500);
                                        $('#cart_div').hide(500);
                                        $('#pending_div').hide(500);
                                        $('#od_div').hide(500);
                                        $('#c_div').hide(500);
                                   }
                                   else if (link[1] == 'cancelled') 
                                   {
                                        $('#c_div').show(500);
                                        $('#expense_tracker_div').hide(500);
                                        $('#cart_div').hide(500);
                                        $('#pending_div').hide(500);
                                        $('#od_div').hide(500);
                                        $('#d_div').hide(500);
                                   }
                                   else if (link[1] == 'expense_tracker') 
                                   {
                                        $('#expense_tracker_div').show(500);
                                        $('#c_div').hide(500);
                                        $('#cart_div').hide(500);
                                        $('#pending_div').hide(500);
                                        $('#od_div').hide(500);
                                        $('#d_div').hide(500);
                                   }
                              },1);
                         });
                    });
               });
          });
     });


//button


      $('#cart_btn').click(function(){
           window.location.href = 'cart.php#cart';
      });

       $('#pending_btn').click(function(){
           window.location.href = 'cart.php#pending';
      });

       $('#od_btn').click(function(){
           window.location.href = 'cart.php#on_delivery';
      });

      $('#d_btn').click(function(){
           window.location.href = 'cart.php#delivered';
      });

       $('#c_btn').click(function(){
           window.location.href = 'cart.php#cancelled';
      });

      $('#label_expense').click(function(){
           window.location.href = 'cart.php#expense_tracker';
      });

//submit

      $('.c_con_ord').click(function(){
            var ord_details = $(this).attr('data-panel').split('#');
            var order_id = ord_details[0];
            var product_id = ord_details[1];
            var order_status = 'pending';
            var type = 'cart_submit';

            window.location.href = 'customer_ordreq.php?product_id='+product_id+'&order_id='+order_id+'&order_status='+order_status+'&type='+type;
      });

      $('.c_can_ord').click(function(){
            var ord_details_c = $(this).attr('data-panel').split('#');
            var order_id_c = ord_details_c[0];
            var product_id_c = ord_details_c[1];
            var order_status_c = 'cancelled';
            var type_c = 'cart_cancel';

            window.location.href = 'customer_ordreq.php?product_id='+product_id_c+'&order_id='+order_id_c+'&order_status='+order_status_c+'&type='+type_c;
      });

      $('.c_cancel_ord').click(function(){
            var ord_details_cancel = $(this).attr('data-panel').split('#');
            var order_id_cancel = ord_details_cancel[0];
            var product_id_cancel = ord_details_cancel[1];
            var order_status_cancel = 'cancelled';
            var type_cancel = 'cart_cancel_pending';

            window.location.href = 'customer_ordreq.php?product_id='+product_id_cancel+'&order_id='+order_id_cancel+'&order_status='+order_status_cancel+'&type='+type_cancel;
      });

});