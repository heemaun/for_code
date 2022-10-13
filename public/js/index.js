$("#ul-toggle").click(function () {
    $("#nav-ul").toggleClass("ul-show");
});

$(document).ready(setTimeout(function(){
    $(".hero-img").addClass("hero-img-first");
    $(".hero-first-msg").removeClass("hide");
},1000));

$(document).ready(setTimeout(function(){
    $(".hero-img").removeClass("hero-img-first");
    $(".hero-first-msg").addClass("hide");
},7500));

$(document).ready(setTimeout(function(){
    $(".hero-img").addClass("hero-img-second");
    $(".hero-second-msg").removeClass("hide");
},11000));

$(document).ready(setTimeout(function(){
    $(".hero-img").removeClass("hero-img-second");
    $(".hero-second-msg").addClass("hide");
},18500));

$(document).ready(setTimeout(function(){
    $(".hero-img").addClass("hero-img-third");
    $(".learn-more").removeClass("hide");
},22000));

$(function(){
    let top = $(".services").offset().top;
    let bottom = $(".services").offset().top + $(".services").height();
    $(window).scroll(function(){
        let scroll = $(window).scrollTop()+($(window).height()/3);
        if((scroll) >= top && (scroll+50) <= bottom){
            $(".card").addClass("show");
        }
        else{
            $(".card").removeClass("show");
        }
    });
});

$(".learn-more").click(function () {
    $("html, body").animate(
        {
            scrollTop: $(".services").offset().top,
        },
        2000
    );
});

$("#home").click(function(){
    $("html, body").animate(
        {
            scrollTop: $(".hero").offset().top,
        },
        2000
    );
});

$("#services").click(function () {
    $("html, body").animate(
        {
            scrollTop: $(".services").offset().top,
        },
        2000
    );
});

// $(document).ready(setTimeout(function(){
//     $(".hero-img").removeClass("hero-img-second");
//     $(".hero-second-msg").addClass("hide");
// },18500));
