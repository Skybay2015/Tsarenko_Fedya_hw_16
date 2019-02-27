$(function () {
    var modal = $('#myModal');
    var openModal = $('.open-btn');
    var closeModal = $('.close-btn');

    openModal.on('click', function () {
        modal.removeClass('closed-modal');
        modal.toggleClass('opn-modal');
    });
    
    closeModal.on('click', function () {
        modal.toggleClass('closed-modal');
        modal.removeClass('opn-modal');
    });
});
