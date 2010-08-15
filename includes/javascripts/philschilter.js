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
    console.log("jetzt isches dunne");
  });
  
  $('#name').mouseout(function() {
    $(this).animate({ height: '55px' }, 500);
    console.log('jetzt isches wider dobe');
  });
  
  $("#latest-tweets").tweet({
    username: "i_philgood",
    count: 3,
    loading_text: "loading tweets..."
  });

});