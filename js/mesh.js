jQuery(document).ready(function($){

   $('.main-navigation, #menu-trigger').addClass('js');

   $('.parallax').parallax("0%", 0.2);

   $('#menu-trigger').click(function(){
      $('.main-navigation').slideToggle().addClass('open');
   });

   $('li.menu-item-has-children').click(function(){
      $(this).children('.sub-menu').slideToggle();
   });

  //Let's do something awesome!

});
