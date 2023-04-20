$(document).ready(function(){
  $('.dropdown-menu').hide();
  $('.dropdown').hover(function(){
    $(this).children('.dropdown-menu').stop(true, true).delay(100).fadeIn(300);
  }, function(){
    $(this).children('.dropdown-menu').stop(true, true).delay(100).fadeOut(300);
  });
});
