function sticky_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('.filter-container').removeClass('filter-nav');
        $('.filter-container').addClass('filter-nav-fixed');
        var rightPad = parseInt(50) - parseInt($('.container-fluid').css('padding-right'));
        $('.catalog').css('margin-top', 0);
        $('.filter-container').css('padding-right', rightPad+'px');
        $('#sticky-anchor').height($('.filter-nav-fixed').outerHeight());
    } else {
        $('.catalog').css('margin-top', '30px');
        $('.filter-container').css('padding-right', 0);
        $('.filter-container').removeClass('filter-nav-fixed');
        $('.filter-container').addClass('filter-nav');
        $('#sticky-anchor').height(0);
    }
}

function goBack() {
    window.history.back();
}

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();

    $( ".item" ).hover(
      function() {
          $('.item').css('filter', 'blur(8px)');
          $( this ).css('filter', 'blur(0)');
          // $( this ).parent().parent().css('transform', 'scale(1.3)');
        // $( this ).parent().find('.panel-button').css('display', 'none');
      }, function() {
        // $( this ).parent().parent().css('transform', 'scale(1)');
        $('.item').css('filter', 'blur(0)');
        // $( this ).parent().find('.panel-button').css('display', 'none');
      }
    );
});
