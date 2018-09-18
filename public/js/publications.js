$(document).ready(function () {
    $(".Cont").click(function () {
        $(".OwnP").css({"color":"#707070", "border-bottom":"none"});
        $(".Cont").css({"color":"#00aced", "border-bottom":"4px solid #00aced"});
        $(".publications").css({"display":"none"});
        $(".contributions").fadeIn(1300).css({"display":"block"});
    });

    $(".OwnP").click(function () {
        $(".Cont").css({"color":"#707070", "border-bottom":"none"});
        $(".OwnP").css({"color":"#00aced", "border-bottom":"4px solid #00aced"});
        $(".publications").fadeIn(1300).css({"display":"block"});
        $(".contributions").css({"display":"none"});
    });
});