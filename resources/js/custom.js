// access the jquery

$(document).ready(function () {

    setTimeout(function () {
        $('.alert').hide('slow');

    }, 1000);
});
$(function () {
    $('.confirm').click(function (e) {
        e.preventDefault();
        if (window.confirm("Are you sure?")) {
            location.href = this.href;
        }
    });
});