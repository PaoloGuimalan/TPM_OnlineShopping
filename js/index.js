$(document).ready(function(){

  //var conveniancecount = $(".ads_class").length;

	$('.ads_class').mouseenter(function(){
    var ads_id = $(this).attr('id');
        $('#'+ads_id).animate({
              height: '210px',
              width: '310px'
        }, 100);
	});

	$('.ads_class').mouseleave(function(){
    var ads_id = $(this).attr('id');
        $('#'+ads_id).animate({
              height: '200px',
              width: '300px'
        }, 100);
	});

//click functions  

$('.ads_class').click(function(){
    var ads_route_id = $(this).attr('data-panel');
        window.location.href = "ads_preview.php?ad_id="+ads_route_id;
  });

//boundary



  $('.categories_class').mouseenter(function(){
      var cat_id = $(this).attr('id');
           $('#'+cat_id).animate({
                  height: '160px',
                  width: '120px'
           },100);
  });

  $('.categories_class').mouseleave(function(){
      var cat_id = $(this).attr('id');
          $('#'+cat_id).animate({
                   height: '140px',
                   width: '100px'
          },100);
  });

//click functions

   $('.categories_class').click(function(){
        var cat_route_id = $(this).attr('data-panel');
        window.location.href = "categories.php?cat_route_id="+cat_route_id;
   });


//boundary


$('.brand_class').mouseenter(function(){
      var br_id = $(this).attr('id');
           $('#'+br_id).animate({
                  height: '160px',
                  width: '120px'
           },100);
  });

  $('.brand_class').mouseleave(function(){
      var br_id = $(this).attr('id');
          $('#'+br_id).animate({
                   height: '140px',
                   width: '100px'
          },100);
  });


//click function


  $('.brand_class').click(function(){
      var br_route_id = $(this).attr('data-panel');
      window.location.href = "brands.php?br_route_id="+br_route_id;
  });


//boundary


$('#logout_btn').mouseenter(function(){
      $('#logout_btn').animate({
           width: '200px',
           backgroundColor: 'red',
           borderColor: 'red',
           color: 'white',
           boxShadow: '0px 0px 20px #FF0000'
      },500);
});

$('#logout_btn').mouseleave(function(){
      $('#logout_btn').animate({
           width: '100px',
           backgroundColor: 'black',
           borderColor: 'red',
           color: 'red',
           boxShadow: '0px 0px 0px'
      },500);
});

});