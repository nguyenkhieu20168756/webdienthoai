$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('#scrollback').fadeIn();
        } else {
            $('#scrollback').fadeOut();
        }
    })
    $('#scrollback').click(function () {
        $('html,body').animate({ scrollTop: 0 }, 600);
    });
});
function addQuantity(quan) {
    let sum = parseInt($("#product-detail-quantity-input").val()) + parseInt(quan);
    if (sum < 1) {
        $("#product-detail-quantity-input").val(1);
    } else {
        $("#product-detail-quantity-input").val(sum);
    }
}