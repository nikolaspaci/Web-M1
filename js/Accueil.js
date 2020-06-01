
$(document).ready(function() {
    ScrollReveal().reveal('.card', { delay: 200 }); 
    $( ".card" ).hover(
      function() {
        $(this).addClass('shadow').css('cursor', 'pointer'); 
      }, function() {
        $(this).removeClass('shadow');
      }
      );
  });