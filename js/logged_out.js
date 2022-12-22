$(document).ready(function(){

        $('#btn').mouseenter(function(){
              $('#btn').animate({
                      width: '250px',
                      backgroundColor: 'white',
                      color: 'black',
                      boxShadow: '0px 0px 10px #FFFFFF'
              },200);
        });

        $('#btn').mouseleave(function(){
              $('#btn').animate({
                      width: '150px',
                      backgroundColor: 'transparent',
                      color: 'white',
                      boxShadow: '0px 0px 0px white'
              },200);
        });

        $('#btn').click(function(){
              window.location.href = 'login.php#'
        });

});