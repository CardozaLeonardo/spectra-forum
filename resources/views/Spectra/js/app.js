$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
  
  $(document).ready(function(){
    var height = $(window).height();

    Ajustes();
    function Ajustes(){
      $(".container-fluid").css({"margin-top": height - 80 + "px"});
    }
    $(document).scroll(function(){
      var scrollTop = $(this).scrollTop();
      var pixels = scrollTop / 70;
  
      if(scrollTop < height){
        $(".BGPrincipal").css({
          "background-position": "center -" + pixels * 10 + "px"
        });
      }
    });  
});