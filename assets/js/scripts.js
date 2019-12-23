$ = jquey.noConflic();

$(document).ready(function(){

    $('.mobile-menu a').on('click', function(){
       $('navbar-pages').toggle('slow');

    });
    //reaction to rezise

   var breakpoint = 768;

   $(window).resize(function(){

        if($(document).width() >= breakpoint){
        	$('#navbar-pages').show();
        }else {
        	$('#navbar-pages').hide();
        }


   });

  //sliders
  $('.slider').bxSlider();
   


});