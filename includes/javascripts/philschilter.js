/**
* JavaScript for my website
*
* @author Phil Schilter
* 
*
**/

jQuery(document).ready(function($) {
  
  $('#name').mouseover(function() {
    $(this).animate({ height: '100px' }, 500);
  });
  
  $('#name').mouseout(function() {
    $(this).animate({ height: '55px' }, 500);
  });
  
  $("#latest-tweets").tweet({
    username: "i_philgood",
    count: 3,
    loading_text: "loading tweets..."
  });
  
  $('a[href=#top]').click(function(){
    $('html, body').animate({scrollTop:0}, 'slow');
    return false;
  });
  
});

