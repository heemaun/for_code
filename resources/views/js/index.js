// const { toSafeInteger } = require("lodash");
$("#ul-toggle").click(function () {
    $("#nav-ul").toggleClass("ul-show");
});

$(window).scroll(function(){
    let servicesTop = $(".services").offset().top;
    let servicesBottom = $(".services").offset().top + $(".services").height();
    let portfolioTop = $(".portfolio").offset().top;
    let portfolioBottom = $(".portfolio").offset().top + $(".portfolio").height();
    let skillsTop = $(".skills").offset().top;
    let skillsBottom = $(".skills").offset().top + $(".skills").height();
    let contactsTop = $(".contacts").offset().top;
    let contactsBottom = $(".contacts").offset().top + $(".contacts").height();

    let scroll = $(window).scrollTop()+($(window).height()/2);

    if(scroll >= servicesTop && scroll <= servicesBottom){
        $(".item").addClass("show");
        $(".services h2").css("animation","section_h2 1s ease-in-out .1s 1 forwards");
    }
    else{
        $(".item").removeClass("show");
        $(".services h2").css("animation","none");
    }

    if(scroll >= portfolioTop && scroll <= portfolioBottom){
        $(".portfolio h2").css("animation","section_h2 1s ease-in-out .1s 1 forwards");
        $(".item").addClass("item-show");
    }
    else{
        $(".portfolio h2").css("animation","none");
        $(".item").removeClass("item-show");
    }

    if(scroll >= skillsTop && scroll <= skillsBottom){
        // $(".hero-img").addClass("hero-img-first");
        // $(".hero-first-msg").removeClass("hide");
        // $(".skills .items img").attr("src","/images/start.jpg");
        // target.removeClass("about-hide-right");
        $(".skills h2").css("animation","section_h2 1s ease-in-out .1s 1 forwards");

        $(".java").css("animation","java 1.5s ease-in-out 0s 1 forwards");
        $(".php").css("animation","php 1.5s ease-in-out .1s 1 forwards");
        $(".c").css("animation","c 1.5s ease-in-out .2s 1 forwards");
        $(".cpp").css("animation","cpp 1.5s ease-in-out .3s 1 forwards");
        $(".c-sharp").css("animation","c-sharp 1.5s ease-in-out .4s 1 forwards");
        $(".python").css("animation","python 1.5s ease-in-out .5s 1 forwards");
        $(".html-css").css("animation","html-css 1.5s ease-in-out .6s 1 forwards");
        $(".javascript").css("animation","javascript 1.5s ease-in-out .7s 1 forwards");

        $(".swing").css("animation","swing 1.5s ease-in-out 0s 1 forwards");
        $(".spring").css("animation","spring 1.5s ease-in-out .1s 1 forwards");
        $(".laravel").css("animation","laravel 1.5s ease-in-out .2s 1 forwards");
        $(".bootstrap").css("animation","bootstrap 1.5s ease-in-out .3s 1 forwards");

        $(".mysql").css("animation","mysql 1.5s ease-in-out 0s 1 forwards");
        $(".oracle-sql").css("animation","oracle-sql 1.5s ease-in-out .1s 1 forwards");
        $(".sql-server").css("animation","sql-server 1.5s ease-in-out .2s 1 forwards");
        // target.addClass("about-show");
    }
    else{
        $(".skills").removeClass("something");

        $(".java").css("animation","none");
        $(".php").css("animation","none");
        $(".c").css("animation","none");
        $(".cpp").css("animation","none");
        $(".c-sharp").css("animation","none");
        $(".python").css("animation","none");
        $(".html-css").css("animation","none");
        $(".javascript").css("animation","none");

        $(".swing").css("animation","none");
        $(".spring").css("animation","none");
        $(".laravel").css("animation","none");
        $(".bootstrap").css("animation","none");

        $(".mysql").css("animation","none");
        $(".oracle-sql").css("animation","none");
        $(".sql-server").css("animation","none");
        // target.removeClass();
        // target.addClass("items");
        // target.addClass("about-hide-right");
        // img.attr("src","/images/about.jpg");
        // img.attr("src","images/about.jpg");
        // $("#about-btn").attr("data-href","0");
        // h3.text("You wanna know about me!!");
        // p.text("");
        // $("#about-btn").text("Yes");
        // $(".skills h2").css("animation","none");
    }

    if(scroll >= contactsTop){
        $(".social-icons div").addClass("social-icon");
        // $(".contacts form").addClass("form-fix");
        $(".contacts h2").css("animation","section_h2 1s ease-in-out .1s 1 forwards");
    }
    else{
        $(".social-icons div").removeClass("social-icon");
        // $(".contacts form").removeClass("form-fix");
        $(".contacts h2").css("animation","none");
    }
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
            // img.attr("src","/images/start.jpg");
            img.attr("src","images/start.jpg");
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
            // img.attr("src","/images/start.jpg");
            img.attr("src","images/start.jpg");
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
            // img.attr("src","/images/start.jpg");
            img.attr("src","images/start.jpg");
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

$("#phone-a, #phone-span").on("mouseover",function(e){
    $("#phone-a").addClass("hover-a");
    $("#phone-span").addClass("hover-span");
});

$("#phone-a, #phone-span").on("mouseout",function(e){
    $("#phone-a").removeClass("hover-a");
    $("#phone-span").removeClass("hover-span");
});

$("#mail-a, #mail-span").on("mouseover",function(e){
    $("#mail-a").addClass("hover-a");
    $("#mail-span").addClass("hover-span");
});

$("#mail-a, #mail-span").on("mouseout",function(e){
    $("#mail-a").removeClass("hover-a");
    $("#mail-span").removeClass("hover-span");
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

$("#skills").click(function () {
    $("html, body").animate(
        {
            scrollTop: $(".skills").offset().top,
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

function nameFocus(){
    $("#form-group").css("box-shadow","0rem 0rem .5rem blue");
}

$("#contact-form").on("submit",function(e){
    e.preventDefault();
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

$(".portfolio-img-div").on("scroll",function(){
    alert("here");
});

$("#contact-form").on("submit",function(e){
    e.preventDefault();
    let name = $("#name").val();
    let message = $("#message").val();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });

    $.ajax({
        url: $(this).attr("action"),
        type: $(this).attr("method"),
        dataType: "json",
        data: {
            name: name,
            message: message,
        },
        beforeSend: function(){
            $(".loading").removeClass("loading-hide");
            $(".error").text("");
        },
        success: function(response,status){
            $(".loading").addClass("loading-hide");
            if(response.status === "errors"){
                $.each(response.errors,function(key,value){
                    $("."+key+"-error").text(value[0]);
                });
            }
            else{
                toastr.success(response.message);
                $("#name").val("");
                $("#message").val("");
            }
        }
    });
});

$("#contacts-clear").click(function(){
    $("#name").text("");
    $("#message").text("");
});
