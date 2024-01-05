  var currentState = 0;

    var video = $('#productVideo')[0];

    $('#playPauseButton').click(function () {
      if (currentState === 0) {
        video.play();
        currentState = 1;
        $(this).html('<i class="fa-solid fa-pause"></i>').removeClass('paused');
      } else {
        video.pause();
        currentState = 0;
        $(this).html('<i class="fa-solid fa-play"></i>').addClass('paused');
      }
    });