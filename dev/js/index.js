$(document).ready(function(){

    $('#home_btn').click(function(){
        window.scroll({
              top: 400,
              behavior: 'smooth'
        });
    });

    $('#about_btn').click(function(){
        window.scroll({
              top: 1000,
              behavior: 'smooth'
        });
    });

    $('#port_btn').click(function(){
        window.scroll({
              top: 3310,
              behavior: 'smooth'
        });
    });

    $('#cont_btn').click(function(){
        window.scroll({
              top: 4000,
              behavior: 'smooth'
        });
    });

    $('#works_btn').click(function(){
        window.scroll({
              top: 2130,
              behavior: 'smooth'
        });
    });

    $('#test_btn').click(function(){
        $('#all_test_part').show(500, function(){
            window.scroll({
              top: 5330,
              behavior: 'smooth'
        });
        });
    });
//navs

    $('#labels_x').click(function(){
          $('#log_sign').hide(500);
    });

    $('#sign').click(function(){
        $('#log_sign_2').hide(500);
          $('#log_sign').show(500);
    });
//
    $('#labels_x_2').click(function(){
          $('#log_sign_2').hide(500);
    });

    $('#log').click(function(){
        $('#log_sign').hide(500);
          $('#log_sign_2').show(500);
    });

//

    $('#log_con').click(function(){
        var name2 = document.getElementById('name_id2').value;
        var email2 = document.getElementById('email_id2').value;
        window.location.href = 'conf.php?code=2&name='+name2+'&email='+email2;
    });

    $('#sign_con').click(function(){
        var name = document.getElementById('name_id').value;
        var email = document.getElementById('email_id').value;
        window.location.href = 'conf.php?code=1&name='+name+'&email='+email;
    });

//

     $('#post_btn').click(function(){
         var content = document.getElementById('text_test').value;
         var name_user = document.getElementById('user_info').innerHTML;

         if (content == '') 
         {
            alert('Please insert a proper testimony');
         }
         else
         {
            window.location.href = 'conf.php?code=3&name_user='+name_user+'&content='+content;
         }
     });

//btns

    $('.li_persons').click(function(){
         var id = $(this).attr('data-panel');
         //alert(id);
         window.location.href = 'person_background.php?dev_id='+id;
    });


    $('.li_persons').mouseenter(function(){
         var data = $(this).attr('data-panel');
         $('#'+data).animate({
            backgroundColor: '#946B45',
            color: 'white'
         },500);
    });

    $('.li_persons').mouseleave(function(){
         var data = $(this).attr('data-panel');
         $('#'+data).animate({
            backgroundColor: 'white',
            color: 'black'
         },100);
    });

    $('#del_post').click(function(){
         var name = $(this).attr('data-panel');
         //alert(name);
         var r = confirm("Click OK to delete post");
         if (r == true) 
         {
            window.location.href = 'conf.php?code=4&name='+name;
         }
         else
         {
            alert('Process Cancelled');
         }
    });

    $('#edit_post').click(function(){
         var value = document.getElementById('value').innerHTML;
         //alert(value);
         var text_area = document.getElementById('text_test').value = value;
         $('#post_btn').hide(500);
         $('#logout_btn').hide(500);
         $('#submit_btn').show(500);
         $('#cancel_btn').show(500);
    });

    $('#cancel_btn').click(function(){
         var text_area = document.getElementById('text_test').value = '';
         $('#submit_btn').hide(500);
         $('#cancel_btn').hide(500);
         $('#post_btn').show(500);
         $('#logout_btn').show(500);
    });

    $('#submit_btn').click(function(){
        var name = $(this).attr('data-panel');
        var text_area = document.getElementById('text_test').value;
        //alert(name);
        window.location.href = 'conf.php?code=5&name='+name+'&edited_value='+text_area;
    });

    $('#logout_btn').click(function(){
        window.location = 'logout.php';
    });

});