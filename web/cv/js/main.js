new WOW().init();
$('.timeline-panel').click(function() {
    $('.timeline-body', this).toggle();

});

$('.minusAdd').click(function(e){
    e.preventDefault();
    $(this).find('i').toggleClass('fa-plus fa-minus');
});