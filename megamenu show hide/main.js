
  // megamenu show hide

  var openMegaMenu = null;

  $('.megamenu-parent a').click(function () {
    var megaMenu = $(this).closest('.megamenu-parent').find('.megamenu-main');

    if (openMegaMenu && openMegaMenu[0] !== megaMenu[0]) {
      openMegaMenu.fadeOut('slow');
    }

    megaMenu.fadeToggle('slow');

    openMegaMenu = megaMenu;
  });

  $(document).on('click', function (e) {
    if (!$(e.target).closest('.megamenu-parent').length) {
      if (openMegaMenu) {
        openMegaMenu.fadeOut('slow');
        openMegaMenu = null;
      }
    }
  });

  $('.megamenu-main').on('click', function (e) {
    e.stopPropagation();
  });
