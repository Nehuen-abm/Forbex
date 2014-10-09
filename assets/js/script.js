$(document).ready(function(){
   $(window).bind('scroll', function() {
   var navHeight =10;
         if ($(window).scrollTop() > navHeight) {
             $('.nav-fbx').addClass('active');
         }
         else {
             $('.nav-fbx').removeClass('active');
         }
    });
})