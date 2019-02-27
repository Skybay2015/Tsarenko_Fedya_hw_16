$(function () {
    $(document).ready(function () {
        $('.slider').slick();
    });
    var $counter = $('.portfolio-counter');

    $('.slider').on('init reInit afterChange', function(event, slick, currentSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        var totalSlide = slick.slideCount == null ? 6 : slick.slideCount;
        $counter.text(i + '/' + totalSlide);
    });
    $('.slider').slick({
        appendArrows: $('.portfolio-slides'),
        prevArrow: '<button class="portfolio-slides-left"><i class="fas fa-angle-left"></i></button>',
        nextArrow: '<button class="portfolio-slides-right"><i class="fas fa-angle-right"></i></button>'
    });

    var operatorClose = $('.operator-close');
    var operatorOpen = $('.operator-open');
    var operatedBlock = $('.portfolio-info');
    operatorClose.on('click', function () {
        operatedBlock.toggleClass('close');
        operatorOpen.toggleClass('open');
    });
    operatorOpen.on('click', function () {
        operatedBlock.removeClass('close');
        operatorOpen.removeClass('open');
    });
});


