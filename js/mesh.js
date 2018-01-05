jQuery(document).ready(function($){

   $('.main-navigation, #menu-trigger').addClass('js');

   // var pH = $('.row.two .text.block').outerHeight();
   // $('.row.two .img.block').outerHeight(pH);

   // $('.parallax').parallax("0%", 0.2);

   $('#menu-trigger').click(function(){
      $('.main-navigation').slideToggle().addClass('open');
   });

   $('li.menu-item-has-children').click(function(){
      $(this).children('.sub-menu').slideToggle();
   });

   //Landing Animations
   var landAnim = new TimelineMax()
      titleAnim = document.getElementById('title-anim');

   landAnim.set(titleAnim, {css:{transform:"translateX(-40px)", opacity:0}})
      .set("#landing-text-anim", {css:{transform:"translateX(30px)", opacity:0}})
      .to(titleAnim, 0.75, {css:{transform:"translateX(0px)", opacity:1}, ease: Power3.easeInOut, delay: 0.4})
      .to("#landing-text-anim", 0.6, {css:{transform:"translateX(0px)", opacity:1}, ease: Power2.easeInOut});
});
