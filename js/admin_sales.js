$(document).ready(function(){

setInterval(function(){

    var link = window.location.href.split('#');

     if(link.length == 1)
     {
     	window.location = "admin_sales.php#pending"
     }

     if(link[1] == 'pending')
     {
          $('#div_pending').show(1000);
          $('#div_on_delivery').hide(500);
          $('#div_delivered').hide(500);
          $('#div_cancelled').hide(500);
     }
     else if(link[1] == 'on_delivery')
     {
          $('#div_on_delivery').show(1000);
          $('#div_pending').hide(500);
          $('#div_delivered').hide(500);
          $('#div_cancelled').hide(500);
     }
     else if(link[1] == 'delivered')
     {  
          $('#div_delivered').show(1000);
     	    $('#div_pending').hide(500);
          $('#div_on_delivery').hide(500);
          $('#div_cancelled').hide(500);
     }
     else if(link[1] == 'cancelled')
     {    
          $('#div_cancelled').show(1000);
     	    $('#div_pending').hide(500);
          $('#div_on_delivery').hide(500);
          $('#div_delivered').hide(500);
     }

}, 1);


//boundary

     $('#pending').click(function(){
           window.location = "admin_sales.php#pending"
     });

     $('#on_delivery').click(function(){
           window.location = "admin_sales.php#on_delivery"
     });

     $('#delivered').click(function(){
           window.location = "admin_sales.php#delivered"
     });

     $('#cancelled').click(function(){
           window.location = "admin_sales.php#cancelled"
     });


//boundary

      $('.c_con_ord').click(function(){
           var data_con = $(this).attr('data-panel');
           var datas = data_con.split('#');
           var ord_id = datas[0];
           var product_id = datas[1];
           var ord_quantity = datas[2];
           var customer_acc_id = datas[3];
           window.location.href = "validate_orders.php?customer_acc_id="+customer_acc_id+"&order_id="+ord_id+"&status=confirm&quantity="+ord_quantity+"&product_id="+product_id;
      });

      $('.c_can_ord').click(function(){
           var data_can = $(this).attr('data-panel');
           var datass = data_can.split('#');
           var ord_id = datass[0];
           var product_id = datass[1];
           var ord_quantity = datass[2];
           var customer_acc_id = datass[3];
           window.location.href = "validate_orders.php?customer_acc_id="+customer_acc_id+"&order_id="+ord_id+"&status=cancel&product_id="+product_id;
      });

      $('.btn_m_s_delivered').click(function(){
           var data_can = $(this).attr('data-panel');
           var datass = data_can.split('#');
           var ord_id = datass[0];
           var product_id = datass[1];
           var ord_quantity = datass[2];
           var customer_acc_id = datass[3];
           window.location.href = "validate_orders.php?customer_acc_id="+customer_acc_id+"&order_id="+ord_id+"&status=m_s_delivered&product_id="+product_id;
      });


});