$(function() {
  $.fn.bootstrapPasswordMeter = function(options) {
    var settings = $.extend({
      minPasswordLength: 8,
      level0ClassName: 'progress-bar-danger',
      level0Description: 'Lemah',
      level1ClassName: 'progress-bar-warning',
      level1Description: 'Lumayan',
      level2ClassName: 'progress-bar-warning',
      level2Description: 'Cukup',
      level3ClassName: 'progress-bar-success',
      level3Description: 'Kuat',
      level4ClassName: 'progress-bar-success',
      level4Description: 'Sangat Kuat',
      parentContainerClass: '.form-group'
    }, options || {});

    $(this).on("keyup", function() {
      var progressBar = $(this).closest(settings.parentContainerClass).find('.progress-bar');
      var progressBarWidth = 0;
      var progressBarDescription = '';
      if ($(this).val().length >= settings.minPasswordLength) {
        var zxcvbnObj = zxcvbn($(this).val());
        progressBar.removeClass(settings.level0ClassName)
          .removeClass(settings.level1ClassName)
          .removeClass(settings.level2ClassName)
          .removeClass(settings.level3ClassName)
          .removeClass(settings.level4ClassName);
        switch (zxcvbnObj.score) {
          case 0:
            progressBarWidth = 15;
            progressBar.addClass(settings.level0ClassName);
            progressBarDescription = settings.level0Description;
            break;
          case 1:
            progressBarWidth = 35;
            progressBar.addClass(settings.level1ClassName);
            progressBarDescription = settings.level1Description;
            break;
          case 2:
            progressBarWidth = 50;
            progressBar.addClass(settings.level2ClassName);
            progressBarDescription = settings.level2Description;
            break;
          case 3:
            progressBarWidth = 75;
            progressBar.addClass(settings.level3ClassName);
            progressBarDescription = settings.level3Description;
            break;
          case 4:
            progressBarWidth = 100;
            progressBar.addClass(settings.level4ClassName);
            progressBarDescription = settings.level4Description;
            break;
        }
      } else {
        progressBarWidth = 0;
        progressBarDescription = '';
      }
      progressBar.css('width', progressBarWidth + '%');
      progressBar.text(progressBarDescription);
    });
  };
  $('#pwd1').bootstrapPasswordMeter({minPasswordLength:1});
});