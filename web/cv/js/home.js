document.addEventListener('DOMContentLoaded', function () {
    particleground(document.getElementById('particles'), {
        dotColor: '#30AC6A',
        lineColor: '#30AC6A'
    });
    var intro = document.getElementById('intro');
    intro.style.marginTop = - intro.offsetHeight / 2 + 'px';
}, false);

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})
