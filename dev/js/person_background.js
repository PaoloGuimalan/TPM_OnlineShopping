$(document).ready(function(){

     $('#first_all').show(500);

     $('#img_back').animate({
          height: '100%'
     },1500, function(){
          $('#frame').animate({
                opacity: '1'
          },1000, function(){
               $('#img_handler').show(1000, function(){
                    $('#fname').animate({
                         fontSize: '30px'
                    },1000, function(){
                         $('#role').animate({
                          opacity: '1' 
                         },1000, function(){
                              $('#email').animate({
                               opacity: '1' 
                              },1000);
                         });
                    });
               });
          });
     });

     document.onkeydown = function(e)
     {
     	if(e.which == 39)
     	{
              distoggle_one();
     	}
     	else if(e.which == 37)
     	{
               distoggle_two();
     	}
          else if(e.which == 40)
          {
               distoggle_two_to_three();
          }
          else if(e.which == 38)
          {
               distoggle_third();
          }
          else if(e.which == 32)
          {
               distoggle_three();
          }
          else if(e.which == 16)
          {
               distoggle_fourth();
          }
          //alert(e.which);
     }

//functions

     function toggle_one()
     {
          $('#first_all').show(500);
          $('#img_back').animate({
               height: '100%'
          },1000, function(){
               $('#frame').animate({
                     opacity: '1'
               },500, function(){
                    $('#img_handler').show(1000, function(){
                         $('#fname').animate({
                              fontSize: '30px'
                         },500, function(){
                              $('#role').animate({
                               opacity: '1' 
                              },500, function(){
                                   $('#email').animate({
                                    opacity: '1' 
                                   },500);
                              });
                         });
                    });
               });
          });
     }


     function distoggle_one()
     {
          $('#img_back').animate({
               height: '0px'
          },500, function(){
               $('#frame').animate({
                     opacity: '0'
               },500, function(){
                    $('#img_handler').hide(500, function(){
                         $('#fname').animate({
                              fontSize: '0px'
                         },500, function(){
                              $('#role').animate({
                               opacity: '0' 
                              },500, function(){
                                   $('#email').animate({
                                    opacity: '0' 
                                   },500, function(){
                                        $('#first_all').hide(500, function(){
                                             toggle_two();
                                        });
                                   });
                              });
                         });
                    });
               });
          });
     }

     function toggle_two()
     {
        $('#second_all').show(100, function(){
            $('#img_back_sec').animate({
                   width: '450px'  
            },1000, function(){
               $('#img_handler_sec').show(1000, function(){
                    $('#second_all').animate({
                            fontSize: '20px'
                    },1000);
               });
            });
        });
     }

     function distoggle_two()
     {
            $('#second_all').animate({
                    fontSize: '0px'
            },500, function(){
                $('#img_handler_sec').hide(1000, function(){
                    $('#img_back_sec').animate({
                             width: '0px'  
                      },500, function(){
                         $('#second_all').hide(100, function(){
                              toggle_one();
                         });
                      });
                 });
            });
     }

//diff_direction

     function distoggle_two_to_three()
     {
            $('#second_all').animate({
                    fontSize: '0px'
            },500, function(){
                $('#img_handler_sec').hide(1000, function(){
                    $('#img_back_sec').animate({
                             width: '0px'  
                      },500, function(){
                         $('#second_all').hide(100, function(){
                              toggle_three();
                         });
                      });
                 });
            });
     }

     function toggle_three()
     {
            $('#third_all').show(100,function(){
               $('#img_back_th').animate({
                        width: '450px'
               },1000, function(){
                    $('#img_handler_th').show(1000, function(){
                         $('#tbl_three').animate({
                                 fontSize: '30px'
                         },1000, function(){
                             $('#tbl_1').animate({
                                 fontSize: '17px'
                             },1000);  
                         });
                    });
               });
            });
     }

     function distoggle_three()
     {
          $('#tbl_1').animate({
                fontSize: '0px'
          },500, function(){
                $('#tbl_three').animate({
                    fontSize: '0px'
          },500, function(){
               $('#img_handler_th').hide(500, function(){
               $('#img_back_th').animate({
                        width: '0px'
               },500, function(){
                    $('#third_all').hide(100, function(){
                         toggle_two();
                    });
               });
            });
          });  
       });
     }


     function distoggle_third()
     {
          $('#tbl_1').animate({
                fontSize: '0px'
          },500, function(){
                $('#tbl_three').animate({
                    fontSize: '0px'
          },500, function(){
               $('#img_handler_th').hide(500, function(){
               $('#img_back_th').animate({
                        width: '0px'
               },500, function(){
                    $('#third_all').hide(100, function(){
                         toggle_fourth();
                    });
               });
            });
          });  
       });
     }

     function toggle_fourth()
     {
          $('#fourth_all').show(500, function(){
               $('#fourth_all').animate({
                      height: '100%'
               },1000, function(){
                    var length = document.getElementById('number').value;
                    //alert(length);
                    var nums = 1;
                    for(var i = 1; i <= length; i++)
                    {
                         var value = $('#lvl'+i).attr('data-panel');
                         //alert(i);
                         $('#lvl'+nums++).animate({
                                 width: value
                         },1000);
                    }
               });
          });
     }

     function distoggle_fourth()
     {
          var length = document.getElementById('number').value;
                    //alert(length);
                    var nums = 1;
                    for(var i = 1; i <= length; i++)
                    {
                         var value = $('#lvl'+i).attr('data-panel');
                         //alert(i);
                         $('#lvl'+nums++).animate({
                                 width: '0%'
                         },1000, function(){
                              $('#fourth_all').animate({
                                     height: '0%'
                              },500, function(){
                                   $('#fourth_all').hide(100, function(){
                                         toggle_three();
                                   });
                              });
                         });
                    }
     }

});