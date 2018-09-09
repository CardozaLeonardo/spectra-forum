$(function(){
    $('[data-toggle="tooltip"]').tooltip();
})
$(document).ready(function () {
    $(".Filter-Btn").click(function () {
        $(".Categories").show("slow");
    });
    $(".close-categorie").click(function () {
        $('.Categories').hide("slow");
    });
});
