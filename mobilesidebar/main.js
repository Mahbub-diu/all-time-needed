
  // mobile sidebar show hide
  $(document).on('click', '#openButton', function () {
    $('#targetElement').removeClass('sidebar-hide');
  });
  $(document).on('click', '#closeButton', function () {
    $('#targetElement').addClass('sidebar-hide');
  });

  // mobile menu dropdown show hide with icon

  var previousClickedElement = null;

  $('.mobile-menu-items .has-children ul.sub-menu').hide();

  $('.mobile-menu-items .has-children').each(function () {
    $(this).click(function () {
      if (previousClickedElement !== null && previousClickedElement !== this) {
        $(previousClickedElement).removeClass('show');
        $(previousClickedElement).find('ul.sub-menu').slideUp(150);
        $(previousClickedElement).find('.mean-expand').html('+');
      }

      $(this).toggleClass('show');

      var currentIcon = $(this).find('.mean-expand');
      if ($(currentIcon).html() === '-') {
        $(currentIcon).html('+');
      } else {
        $(currentIcon).html('-');
      }

      $(this).find('ul.sub-menu').slideToggle(150);

      previousClickedElement = this;
    });
  });