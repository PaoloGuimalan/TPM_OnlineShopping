$(document).ready(function(){

      var num = document.getElementById('num').value;

      /*for (var i = 1; i <= num; i++) {
      	   var percent_rate = $('#percent_rate'+i).attr('data-panel');
      	   alert(i);
      }*/

       /*setTimeout(function(){
         for (var i = 1; i <= num; i++) {
      	   var percent_rate = document.getElementById('percent_rate'+i).innerHTML;
      	   $('#level'+i).animate({
                    width: percent_rate
       	   },1000);
        }
      },500);*/

      setInterval(function(){

        var link = window.location.href.split('#');

          if(link.length == 1)
         {
            window.location = "data_admin.php#ratings";
         }

         if (link[1] == 'ratings') 
         {
            $('#review_div').hide(500);
            $('#backup_div').hide(500);
            $('#restore_div').hide(500);
            $('#rating_div').show(500);
         }
         else if (link[1] == 'reviews') 
         {
            $('#rating_div').hide(500);
            $('#backup_div').hide(500);
            $('#restore_div').hide(500);
            $('#review_div').show(500);
         }

         else if (link[1] == 'backup') 
         {
            $('#rating_div').hide(500);
            $('#review_div').hide(500);
            $('#restore_div').hide(500);
            $('#backup_div').show(500);
         }

         else if (link[1] == 'restore') 
         {
            $('#rating_div').hide(500);
            $('#review_div').hide(500);
            $('#backup_div').hide(500);
            $('#restore_div').show(500);
         }

      },1);


      $('#ratings').click(function(){
         window.location.href = "data_admin.php#ratings";
      });

      $('#reviews').click(function(){
         window.location.href = "data_admin.php#reviews";
      });

      $('#backup').click(function(){
         window.location.href = "data_admin.php#backup";
      });

      $('#restore').click(function(){
         window.location.href = "data_admin.php#restore";
      });

      $('#backup_con').click(function(){
         window.location.href = "database_backup.php";
      });
     

//link

      setTimeout(function(){
         for (var i = 1; i <= num; i++) {
      	   var percent_rate = document.getElementById('percent_rate'+i).innerHTML;
      	   var res = percent_rate.replace('%','');

           if (res <= 30) 
           {
               $('#level'+i).animate({
                    width: percent_rate,
                    backgroundColor: '#FF0000'
       	   		},1000);
               $('#bar'+i).animate({
                    borderColor: '#FF0000'
               },1000);
           }
           else if (res > 30 && res <= 50) 
           {
               $('#level'+i).animate({
                    width: percent_rate,
                    backgroundColor: '#FF7F00'
       	   		},1000);
               $('#bar'+i).animate({
                    borderColor: '#FF7F00'
               },1000);
           }
           else if (res > 50 && res <= 70) 
           {
               $('#level'+i).animate({
                    width: percent_rate,
                    backgroundColor: '#FFFF00'
       	   		},1000);
               $('#bar'+i).animate({
                    borderColor: '#FFFF00'
               },1000);
           }
           else if (res > 70 && res <= 100) 
           {
               $('#level'+i).animate({
                    width: percent_rate,
                    backgroundColor: '#00FF00'
       	   		},1000);
               $('#bar'+i).animate({
                    borderColor: '#00FF00'
               },1000);
           }

        }
      },500);

//panel

      $('#nav').click(function(){
        var body = document.getElementById('cover').style.opacity = '0.7';
        var blur = document.getElementById('cover').style.filter = 'blur(10px)';
        var overf = document.getElementsByTagName('body')[0].style.overflowY = 'hidden';
        var overf2 = document.getElementById('side_panel').style.overflow = 'scroll';
           $('.head').animate({
                 fontSize: '0px'
           },500);
           $('html,body').scrollTop(0);
           $('#close_nav').show(500);
           $('#tbl_data').show(500);
           $('#side_panel').animate({
                 width: '50%',
           },500);
      });

      $('#close_nav').click(function(){
        var body = document.getElementById('cover').style.opacity = '1';
        var blur = document.getElementById('cover').style.filter = 'blur(0px)';
        var overf = document.getElementsByTagName('body')[0].style.overflowY = 'scroll';
        var overf2 = document.getElementById('side_panel').style.overflow = 'hidden';
           $('.head').animate({
                 fontSize: '30px'
           },500);
           $('#close_nav').hide(500);
           $('#tbl_data').hide(500);
           $('#side_panel').animate({
                 width: '0%'
           },500);
      });


      $('.mmm').click(function(){
         var nnm = $(this).attr('data-panel');
         //alert(nnm);
         window.location.href = 'dev/conf.php?code=7&name='+nnm;
      });

});