$(function() {
    $(".hide-bars-b").click(function() {
      $('.hidable-nav').show();
     $(this).hide();
     $(".hide-bars-x").show();
    
    });
    $(".hide-bars-x").click(function() {
        $('.hidable-nav').hide();
       $(this).hide();
       $(".hide-bars-b").show();
      
      });

    
   
  });