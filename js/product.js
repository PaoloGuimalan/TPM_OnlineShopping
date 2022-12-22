$(document).ready(function(){
    
      var supplement = document.getElementById('supplement').value;
      var title = document.getElementById('title').innerHTML = supplement;

      var order_success = document.getElementById('session_success').value;
      var pro_id = document.getElementById('product_id').value;

      if (order_success == 1) 
      {
          $('#session_order').show(500);
          setTimeout(function() 
               {
                    $('#session_order').hide(2000);
               }, 3000);
      }
      else if (order_success == 2) 
      {
          $('#session_order_cart').show(500);
          setTimeout(function() 
               {
                    $('#session_order_cart').hide(2000);
               }, 3000);
      }

      if (performance.navigation.type == performance.navigation.TYPE_RELOAD) 
          {
               var from_where = document.getElementById('from_link').value;
               var id_link = document.getElementById('id_link').value;
               window.location = 'product.php?from='+from_where+'&id='+id_link+'&product_id='+pro_id+"&isordersuccessful=0";
          }

//setup


      $('#content').show(1000);

      $('#btn_back').mouseenter(function(){
      	    var val_back = document.getElementById('btn_back').innerHTML = '< Back';
            $('#btn_back').animate({
                 width: '200px',
                 borderRadius: '10px'
            },500);
      });

      $('#btn_back').mouseleave(function(){
      		var val_back = document.getElementById('btn_back').innerHTML = 'Back';
            $('#btn_back').animate({
                 width: '100px',
                 borderRadius: '0px'
            },500);
      });

      $('#btn_home').mouseenter(function(){
      		var val_home = document.getElementById('btn_home').innerHTML = 'Home >';
            $('#btn_home').animate({
                 width: '200px',
                 borderRadius: '10px'
            },500);
      });

      $('#btn_home').mouseleave(function(){
      		var val_home = document.getElementById('btn_home').innerHTML = 'Home';
            $('#btn_home').animate({
                 width: '100px',
                 borderRadius: '0px'
            },500);
      });

      $('#btn_back').click(function(){
          var from_where = document.getElementById('from_link').value;
          var product_id = document.getElementById('product_id').value;
          var id_link = document.getElementById('id_link').value;
          if (from_where == 'brands') 
          {
               window.location.href = from_where+".php?br_route_id="+id_link;
          }
          else if(from_where == 'categories')
          {
               window.location.href = from_where+".php?cat_route_id="+id_link;
          }
          else if(id_link == null)
          {
               window.location = 'index.php';
          }
          else
          {
               window.location = 'index.php';
          }
      });

      $('#btn_home').click(function(){
           window.location = 'index.php';
      });

      $('#btn_log').click(function(){
           window.location = 'login.php#';
      });

//boundary

      $('.the_imgs').click(function(){
           var src = $(this).attr('src');
           $('#img_act_pro').attr('src', src);
      });

      $('.the_imgs').mouseenter(function(){
           var img_id = $(this).attr('id');
           $('#'+img_id).animate({
                  height: '110px',
                  width: '110px'
           },100);
      });

      $('.the_imgs').mouseleave(function(){
           var img_id = $(this).attr('id');
           $('#'+img_id).animate({
                  height: '100px',
                  width: '100px'
           },100);
      });

//btns
  
      $('#btn_add').mouseenter(function(){
           $('#btn_add').animate({
                  backgroundColor: '#FFA500',
                  color: 'white'
           },100);
      });

      $('#btn_add').mouseleave(function(){
           $('#btn_add').animate({
                   backgroundColor: 'white',
                   color: '#FFA500'
           },100);
      });

      //next button


      $('#btn_buy').mouseenter(function(){
           $('#btn_buy').animate({
                  backgroundColor: '#008000',
                  color: 'white'
           },100);
      });

      $('#btn_buy').mouseleave(function(){
           $('#btn_buy').animate({
                   backgroundColor: 'white',
                   color: '#008000'
           },100);
      });

      $('#btn_add').click(function(){
            $('#cart_nav').show(500);
            $('#buy_nav').hide(500);
      });

      $('#btn_buy').click(function(){
            $('#buy_nav').show(500);
            $('#cart_nav').hide(500);
      });

//operations

      var minus = 1;
      $('#btn_minus').click(function(){
            var num_order = $('#num_order').attr('value', minus--);
      });


       $('#btn_plus').click(function(){
            var num_order = $('#num_order').attr('value', minus++);
      });

       //buy


       var minus_buy = 1;
      $('#btn_minus_buy').click(function(){
            var num_order = $('#num_order_buy').attr('value', minus_buy--);
      });


       $('#btn_plus_buy').click(function(){
            var num_order = $('#num_order_buy').attr('value', minus_buy++);
      });

//order

      $('#btn_confirm_add_cart').click(function(){
          var product_id = document.getElementById('product_id').value;
          var quantity = document.getElementById('num_order').value;
          var method = document.getElementById('payment_method').value;
          var from_where = document.getElementById('from_link').value;
          var id_link = document.getElementById('id_link').value;
          var order_status = 'cart';

          var product_type = document.getElementById('product_type').value;
          var product_color = document.getElementById('product_color').value;
          window.location.href = 'order_request.php?product_color='+product_color+'&product_type='+product_type+'&method='+method+'&order_status='+order_status+'&from='+from_where+'&id='+id_link+'&product_id='+product_id+'&quantity='+quantity;
      });

      $('#btn_confirm_order').click(function(){
          var product_id = document.getElementById('product_id').value;
          var quantity = document.getElementById('num_order_buy').value;
          var method = document.getElementById('payment_method_buy').value;
          var from_where = document.getElementById('from_link').value;
          var id_link = document.getElementById('id_link').value;
          var order_status = 'pending';

          var product_type_con = document.getElementById('product_type_buy').value;
          var product_color_con = document.getElementById('product_color_buy').value;
          window.location.href = 'order_request.php?product_color='+product_color_con+'&product_type='+product_type_con+'&method='+method+'&order_status='+order_status+'&from='+from_where+'&id='+id_link+'&product_id='+product_id+'&quantity='+quantity;
      });

//stars
 
      var num = 0;

      $('.stars').click(function(){
            var star_num = $(this).attr('id');
            if (star_num == 1) 
            {
               $('#1').css('color', 'yellow');
               $('#2').css('color', 'black');
               $('#3').css('color', 'black');
               $('#4').css('color', 'black');
               $('#5').css('color', 'black');
               num = 1;
            }
            else if(star_num == 2) 
            {
               $('#1').css('color', 'yellow');
               $('#2').css('color', 'yellow');
               $('#3').css('color', 'black');
               $('#4').css('color', 'black');
               $('#5').css('color', 'black');
               num = 2;
            }
            else if(star_num == 3) 
            {
               $('#1').css('color', 'yellow');
               $('#2').css('color', 'yellow');
               $('#3').css('color', 'yellow');
               $('#4').css('color', 'black');
               $('#5').css('color', 'black');
               num = 3;
            }
            else if(star_num == 4) 
            {
               $('#1').css('color', 'yellow');
               $('#2').css('color', 'yellow');
               $('#3').css('color', 'yellow');
               $('#4').css('color', 'yellow');
               $('#5').css('color', 'black');
               return num = 4;
            }
            else if(star_num == 5) 
            {
               $('#1').css('color', 'yellow');
               $('#2').css('color', 'yellow');
               $('#3').css('color', 'yellow');
               $('#4').css('color', 'yellow');
               $('#5').css('color', 'yellow');
               num = 5;
            }
      });


      $('#confirm_review').click(function(){
               var review_id = document.getElementById('review_id').value;
               var prodid = document.getElementById('prodid').value;
               var customer_info_id = document.getElementById('info_id_input').value;
               var review_content = document.getElementById('add_review').value;
               var stars = num;

               window.location.href = "review_request.php?review_id="+review_id+"&prodid="+prodid+"&customer_info_id="+customer_info_id+"&review_content="+review_content+"&stars="+stars;
      });

});