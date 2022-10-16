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
            $(".item").addClass("show");
        }
        else{
            $(".item").removeClass("show");
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
            $(".item").addClass("item-show");
        }
        else{
            $(".item").removeClass("item-show");
        }
    });
});

$(function(){
    let top = $(".about").offset().top;
    let bottom = $(".about").offset().top + $(".about").height();
    let h3 = $("#item h3");
    let p = $("#item p");
    $(window).scroll(function(){
        let scroll = $(window).scrollTop()+($(window).height()/2);
        // let scroll = $(window).scrollTop();
        let target = $("#item");
        let img = $("#item img")
        if(scroll >= top && scroll <= bottom){
            // $(".hero-img").addClass("hero-img-first");
            // $(".hero-first-msg").removeClass("hide");
            // $(".about .items img").attr("src","/images/start.jpg");
            target.removeClass("about-hide-right");
            // target.addClass("about-show");
        }
        else{
            $(".about").removeClass("something");
            target.removeClass();
            target.addClass("items");
            target.addClass("about-hide-right");
            img.attr("src","/images/about.jpg");
            $("#about-btn").attr("data-href","0");
            h3.text("You wanna know about me!!");
            p.text("");
            $("#about-btn").text("Yes");
        }
    });
});

$("#about-btn").click(function(){
    let target = $("#item");
    let img = $("#item img");
    let h3 = $("#item h3");
    let p = $("#item p");
    if($(this).attr("data-href")==="0"){
        $(this).attr("data-href",1);
        // target.removeClass("about-show");
        target.addClass("about-hide-left");
        setTimeout(function(){
            target.removeClass("about-hide-left");
            img.attr("src","/images/start.jpg");
            h3.text("Start");
            p.text("Start paragaraph");
            $("#about-btn").text("Next");
        },2000);
    }
    else if($(this).attr("data-href")==="1"){
        $(this).attr("data-href",2);
        target.addClass("about-hide-right");
        setTimeout(function(){
            target.removeClass("about-hide-right");
            img.attr("src","/images/start.jpg");
            h3.text("2nd Title");
            p.text("2nd paragaraph");
            $("#about-btn").text("Next");
        },2000);
    }
    else if($(this).attr("data-href")==="2"){
        $(this).attr("data-href",3);
        target.addClass("about-hide-left");
        setTimeout(function(){
            target.removeClass("about-hide-left");
            img.attr("src","/images/start.jpg");
            h3.text("3rd Title");
            p.text("3rd paragaraph");
            $("#about-btn").text("Contact Now!");
        },2000);
    }
    else{
        $(this).attr("data-href",4);
        $("html, body").animate(
            {
                scrollTop: $(".contacts").offset().top,
            },
            2000
        );
        // target.addClass("about-hide-left");
        // setTimeout(function(){
        //     target.removeClass("about-hide-left");
        //     img.attr("src","/images/start.jpg");
        //     h3.text("3rd Title");
        //     p.text("3rd paragaraph");
        // },2000);
        // $(this).text("Next");
    }
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

$("#about").click(function () {
    $("html, body").animate(
        {
            scrollTop: $(".about").offset().top,
        },
        2000
    );
});

$("#contacts").click(function () {
    $("html, body").animate(
        {
            scrollTop: $(".contacts").offset().top,
        },
        2000
    );
});

$(".portfolio .item img").click(function(){
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
