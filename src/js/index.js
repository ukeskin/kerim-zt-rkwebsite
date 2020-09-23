$(document).ready(function() {
    $("#play").click(function() {
       $(this).addClass("hide");
       $("#pause").removeClass("hide");
    });
    $("#pause").click(function() {
       $(this).addClass("hide");
       $("#play").removeClass("hide");
    });

    $("#play2").click(function() {
      $(this).addClass("hide");
      $("#pause2").removeClass("hide");
   });
   $("#pause2").click(function() {
      $(this).addClass("hide");
      $("#play2").removeClass("hide");
   });


   $("#play3").click(function() {
      $(this).addClass("hide");
      $("#pause3").removeClass("hide");
   });
   $("#pause3").click(function() {
      $(this).addClass("hide");
      $("#play3").removeClass("hide");
   });
  });
  
  console.log("2131231")