// All custom codes with comment

$(document).ready(function () {
    //banner effect
    $("#banner .banner-inner h1 span").addClass("animated");
    $("#banner .banner-inner h1 span").mouseover(function () {
        $("#banner .banner-inner h1 span").removeClass("shake");
        $(this).addClass("shake");
    });

    //modal bg blur effect
    $(".zoom-modal").click(function () {
        $(".makeblur").css("filter", "blur(25px)");
    });
    $(".project-modal .modal").click(function () {
        $(".makeblur").css("filter", "blur(0px)");
    });


    //switch button effect
    $(".switch-on-off-button").click(function () {
        $(".light-off-overlay").toggleClass("oz-0");
        $(this).toggleClass("switch-color-red");
        $(".switch-on-shadow").toggleClass("switch-color-red");
        $(".switch-on-off-button p").html("Switch On");
        $(".switch-color-red p").html("Switch Off");
        $(this).css("top", "35px");
        $(".switch-on-shadow").css("top", "2px");
        setTimeout(function () {
            $(".switch-on-off-button").css("top", "30px");
            $(".switch-on-shadow").css("top", "7px");
        }, 100);
    });


    //skill-hover-effect
    $("#myskills").on("mouseover", "img", function () {
        var getcolor = $(this).attr("setcolor");
        $(".skill-box img").addClass("bnw");
        $(this).addClass("invert-transform");
        $(".skill-overlay-bg").css("background", getcolor);
    });
    $("#myskills").on("mouseout", "img", function () {
        $(".skill-box img").removeClass("bnw");
        $(this).removeClass("invert-transform");
        $(".skill-overlay-bg").css("background", "transparent");
    });

});