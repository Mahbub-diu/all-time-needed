var menuitemSelector = 'header .main-header ul li a';

  $(menuitemSelector).click(function () {
    var isActive = $(this).hasClass('active');

    $(menuitemSelector).removeClass('active');

    if (!isActive) {
      $(this).toggleClass('active');
    }
  });