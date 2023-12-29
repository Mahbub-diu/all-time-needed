 var menuitemSelector = '.title-box ul li a';

  $(document).on('click', menuitemSelector, function () {
    $(menuitemSelector).removeClass('active');

    $(this).addClass('active');
  });