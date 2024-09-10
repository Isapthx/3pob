$(document).ready(function() {
    $(window).resize(function() {
      if ($(window).width() < 768) {
        $('.card').removeClass('col-md-4').addClass('col-sm-6');
      } else {
        $('.card').removeClass('col-sm-6').addClass('col-md-4');
      }
    });
  });