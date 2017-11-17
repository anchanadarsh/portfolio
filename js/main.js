// All custom codes with comment

$(document).ready(function () {
    $("#banner .banner-inner h1 span").addClass("wow");
    $("#banner .banner-inner h1 span").mouseover(function () {
        $("#banner .banner-inner h1 span").removeClass("rubberBand");
        $(this).addClass("rubberBand");
    });
});