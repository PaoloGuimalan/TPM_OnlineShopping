$(document).ready(function(){

     $('#cat_head').animate({
            width: '100%'
     },500);

     $('#page_label').animate({
            fontSize: '35px'
     },500, function(){
           var d_button = document.getElementById('d_button').style.display = 'unset';
           $('#d_button').animate({
            width: '100px'
         },500, function(){
              $('.div_show_products').animate({
                   width: '80%'
                 },500, function(){
                        $('.products_img_class').animate({
                              width: '200px',
                              height: '200px'
                        }, 500, function(){
                            $('.tbl_desc').animate({
                                color: 'black'
                            }, 500)
                        });   
                 });
         });
     });

     $('#d_button').click(function(){
           window.location = 'index.php';
     });

     $('#d_button').mouseenter(function(){
           $('#d_button').animate({
               width: '200px',
               backgroundColor: 'white',
               color: 'black'
           },500);
     });

     $('#d_button').mouseleave(function(){
           $('#d_button').animate({
               width: '100px',
               backgroundColor: 'transparent',
               color: 'white'
           },500);
     });

     $('.div_show_products').mouseenter(function(){
            var product_resp = $(this).attr('id');
            $('#'+product_resp).animate({
                   width: '85%'
            });
     });

     $('.div_show_products').mouseleave(function(){
            var product_resp = $(this).attr('id');
            $('#'+product_resp).animate({
                   width: '80%'
            },200);
     });

     $('.div_show_products').click(function(){
            var product_id = $(this).attr('data-panel');
            var cat_id = document.getElementById('cat_id').value;
            window.location.href = "product.php?from=categories&id="+cat_id+"&product_id="+product_id+"&isordersuccessful=0";
     });

});