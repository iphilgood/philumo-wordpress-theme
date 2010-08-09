/**
* JavaScript for my website
*
* @author Phil Schilter
* 
*
**/

jQuery(document).ready(function($) {
  
  $("#latest-tweets").tweet({
    username: "phil_schilter",
    count: 3,
    loading_text: "loading tweets..."
  });

});