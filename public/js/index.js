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
        let scroll = $(window).scrollTop()+($(window).height()/2);
        // let scroll = $(window).scrollTop();
        if(scroll >= top && scroll <= bottom){
            $(".card").addClass("show");
        }
        else{
            $(".card").removeClass("show");
        }
    });
});

$(function(){
    let top = $(".portfolio").offset().top;
    let bottom = $(".portfolio").offset().top + $(".portfolio").height();
    $(window).scroll(function(){
        let scroll = $(window).scrollTop()+($(window).height()/2);
        // let scroll = $(window).scrollTop();
        if(scroll >= top && scroll <= bottom){
            $(".card").addClass("card-show");
        }
        else{
            $(".card").removeClass("card-show");
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

$("#portfolio").click(function () {
    $("html, body").animate(
        {
            scrollTop: $(".portfolio").offset().top,
        },
        2000
    );
});

$(".portfolio .card img").click(function(){
    $("#portfolio-img").attr("src",$(this).attr("src"));
    $("#portfolio-img-div").removeClass("hide");
});

$("#portfolio-img-div-close").click(function(){
    $("#portfolio-img-div").addClass("hide");
});

// $(document).ready(setTimeout(function(){
//     $(".hero-img").removeClass("hero-img-second");
//     $(".hero-second-msg").addClass("hide");
// },18500));
