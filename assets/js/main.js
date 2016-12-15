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

function sticky_relocate1() {
    var window_top = $(window).scrollTop();
    var div_top = $('#sticky-anchor').offset().top;
    if (window_top > div_top) {
        $('.cart-container').removeClass('item-r');
        $('.cart-container').addClass('item-r-fixed');
    } else {
        $('.cart-container').removeClass('item-r-fixed');
        $('.cart-container').addClass('item-r');
        $('#sticky-anchor').height(0);
    }
}


$( document ).ready(function() {
    // $('.item-pict').css('transform', 'rotate(10deg)');
});

$(function() {
    $(window).scroll(sticky_relocate);
    sticky_relocate();
    $(window).scroll(sticky_relocate1);
    sticky_relocate1();

    $( ".item" ).hover(
      function() {
          $('.item').css('filter', 'blur(8px)');
          $( this ).css('filter', 'blur(0)');
          // $( this ).parent().parent().css('transform', 'scale(1.3)');
          // $( this ).find('.panel-button').css('display', 'block');
      }, function() {
        // $( this ).parent().parent().css('transform', 'scale(1)');
        $('.item').css('filter', 'blur(0)');
        $( this ).parent().find('.panel-button').css('display', 'none');
      }
    );

    $( ".item-line" ).hover(
      function() {
        $( this ).addClass('order-hoverer');
      }, function() {
        $( this ).removeClass('order-hoverer');
      }
    );

});
