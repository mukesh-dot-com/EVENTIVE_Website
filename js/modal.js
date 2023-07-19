$(document).ready(function() {
    $(".card-link").click(function(){
        $(".rounded").attr("src",$(this).parentsUntil(".card").siblings().children("img").attr("Src"));
        $(".product_name").text($(this).parentsUntil(".card").siblings(".card_label").children(".card_label").text());
        $(".product_desc").text($(this).parentsUntil(".card").siblings("p").text()).css({"font-family":"sans-serif","font-size":"15px"});
        $(".date").text($(this).parentsUntil(".card").siblings(".maincontent").children(".date").text());
        $(".venue").text($(this).parentsUntil(".card").siblings(".maincontent").children(".venue").text());
        $(".time").text($(this).parentsUntil(".card").siblings(".maincontent").children(".time").text());
    });
    $(window).resize(function (){
        if($(window).width() < 780) {
        $(".modal-content").css("transform", "scaleX(1)");
        $("#modal_date").css({"width":"100%"});
        $(".btn2").css({"width":"90%","margin-right":"0.6em","margin-top":"30px !important"});
        }
        else{
            $(".modal-content").css("transform", "scaleX(1.4)");
            $("#modal_date").css({"width":"50%"});
            $(".btn2").css({"width":"40%","margin-right":"0.6em","margin-top":"30px !important"});
        }
    });
});