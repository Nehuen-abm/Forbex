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
     wow = new WOW({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       0,          // distance to the element when triggering the animation (default is 0)
            mobile:       true,       // trigger animations on mobile devices (default is true)
            live:         true        // act on asynchronously loaded content (default is true)
         });
         
        wow.init();

})