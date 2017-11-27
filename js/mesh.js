jQuery(document).ready(function($){

   $('.main-navigation, #menu-trigger').addClass('js');

   $('.parallax').parallax("50%", 0.5);

   $('#menu-trigger').click(function(){
      $('.main-navigation').slideToggle().addClass('open');
   });

   $('li.menu-item-has-children').click(function(){
      $(this).children('.sub-menu').slideToggle();
   });

  //Let's do something awesome!

});
