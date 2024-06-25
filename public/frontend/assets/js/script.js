$(document).ready(function(){
    // Add smooth scrolling to navigation links
    $('.nav-link').click(function(event){
      event.preventDefault();
      var target = $(this).attr('href');
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1000);
    });
  });
