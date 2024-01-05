
  // mobile sidebar show hide
  $(document).on('click', '#openButton', function () {
    $('#targetElement').removeClass('sidebar-hide');
  });
  $(document).on('click', '#closeButton', function () {
    $('#targetElement').addClass('sidebar-hide');
  });

  // mobile menu dropdown show hide with icon

// sidebar slideup and down

    var $ul = $('.mobile-menu-items > ul');

    $ul.find('li a').click(function (e) {
      var $li = $(this).parent();

      if ($li.find('ul').length > 0) {
        e.preventDefault();

        if ($li.hasClass('selected')) {
          $li.removeClass('selected').find('li').removeClass('selected');
          $li.find('ul').slideUp(400);
          $li.find('a i').removeClass('mdi-flip-v');
        } else {
          if ($li.parents('li.selected').length == 0) {
            $ul.find('li').removeClass('selected');
            $ul.find('ul').slideUp(400);
            $ul.find('li a i').removeClass('mdi-flip-v');
          } else {
            $li.parent().find('li').removeClass('selected');
            $li.parent().find('> li ul').slideUp(400);
            $li.parent().find('> li a i').removeClass('mdi-flip-v');
          }

          $li.addClass('selected');
          $li.find('>ul').slideDown(400);
          $li.find('>a>i').addClass('mdi-flip-v');
        }
      }
    });

    $('.mobile-menu-items > ul ul').each(function (i) {
      if ($(this).find('>li>ul').length > 0) {
        var paddingLeft = $(this)
          .parent()
          .parent()
          .find('>li>a')
          .css('padding-left');
        var pIntPLeft = parseInt(paddingLeft);
        var result = pIntPLeft + 4;

        $(this).find('>li>a').css('padding-left', result);
      } else {
        var paddingLeft = $(this)
          .parent()
          .parent()
          .find('>li>a')
          .css('padding-left');
        var pIntPLeft = parseInt(paddingLeft);
        var result = pIntPLeft + 4;

        $(this)
          .find('>li>a')
          .css('padding-left', result)
          .parent()
          .addClass('selected--last');
      }
    });

    var activeLi = $('li.selected');
    if (activeLi.length) {
      opener(activeLi);
    }

    function opener(li) {
      var ul = li.closest('ul');
      if (ul.length) {
        li.addClass('selected');
        ul.addClass('open');
        li.find('>a>i').addClass('mdi-flip-v');

        if (ul.closest('li').length) {
          opener(ul.closest('li'));
        } else {
          return false;
        }
      }
    }