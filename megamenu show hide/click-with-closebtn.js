
  var openMegaMenu = null;

  $('.megamenu-parent a').click(function () {
    var megaMenu = $(this).closest('.megamenu-parent').find('.megamenu-main');

    if (openMegaMenu && openMegaMenu[0] !== megaMenu[0]) {
      openMegaMenu.fadeOut('slow');

      openMegaMenu.closest('.megamenu-parent').find('a').removeClass('active');
    }

    megaMenu.fadeToggle('slow');

    openMegaMenu = megaMenu;
  });

  $('.megamenu-main .megamenu-close').click(function (e) {
    e.preventDefault();

    $(this).closest('.megamenu-main').fadeOut('slow');

    $(this).closest('.megamenu-parent').find('a').removeClass('active');
  });

  $(document).on('click', function (e) {
    if (!$(e.target).closest('.megamenu-parent').length) {
      if (openMegaMenu) {
        openMegaMenu.fadeOut('slow');

        openMegaMenu
          .closest('.megamenu-parent')
          .find('a')
          .removeClass('active');
        openMegaMenu = null;
      }
    }
  });

  $('.megamenu-main').on('click', function (e) {
    e.stopPropagation();
  });

  var menuitemSelector = 'header .main-header ul.parent-ul > li > a';

  $(menuitemSelector).click(function () {
    var isActive = $(this).hasClass('active');

    $(menuitemSelector).removeClass('active');

    if (!isActive) {
      $(this).toggleClass('active');
    }
  });