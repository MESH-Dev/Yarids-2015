jQuery(document).ready(function($) {
  $('.responsive-menu i').click(function(){
    $(this).toggleClass('fa-close fa-bars');
    $('.navigation').toggle();
  });

  $(window).resize(function() {
    if($(window).width() > 420) {
      $('.navigation').show();
      $('.responsive-menu i').addClass('fa-close');
      $('.responsive-menu i').removeClass('fa-bars');
    }
  });

});
