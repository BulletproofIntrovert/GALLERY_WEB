/*$(document).ready(function() {
  $('.container li:has(ul)').click(function(e){
    e.preventDefault();

    if ($(this).hasClass('.gall')) {
      $(this).removeClass('.gall');
      $(this).children('ul').slideUp();
    } else {
      $('.container li ul a').slideUp();
      $('.container li').removeClass('.gall');
      $(this).addClass('.gall');
      $(this).children('ul').slideDown();
    }
  });
});*/
$(document).ready(function(){
  $('.container li:has(ul)').click(function(){
    if ($(this).hasClass('.gall')) {
      $(this).children('ul').slideDown();
    }
      else {
        $(this).children('ul').slideUp();
      }
  });
});
