function setActive(pageNum){
  $(".menu li:nth-child("+pageNum+")").addClass("active");
}
$(document).ready(function(){
  var currentWidth = 9999;
    function menuCollapse(){
        var windowWidth = $(window).width();
        if(windowWidth <= 750) {//for iPad & smaller devices
          if(currentWidth > 750){
            $('.menu').collapse("hide");
          }
        }
        else{
            $('.menu').collapse('show');
        }
        currentWidth = $(window).width();
    }

    $(".js-toggle-menu").click(function(){
         $('.menu').collapse('toggle');
    });


    $(window).resize(function(){
        menuCollapse();
    });

    menuCollapse();
});
