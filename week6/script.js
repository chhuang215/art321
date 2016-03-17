$(document).ready(function(){
  var lineToHighlight = 0;

  $('audio').bind('timeupdate', function(){
    var t = this.currentTime;

    if( t < 6.7){ lineToHighlight = 1; }
    else if(t < 9.7){ lineToHighlight = 2;}
    else if(t < 12){ lineToHighlight = 3;}
    else if(t < 16){ lineToHighlight = 4; }
    else if(t < 20){ lineToHighlight = 0;}
    else if(t < 23.8){ lineToHighlight = 5;}
    else if(t < 25){ lineToHighlight = 0; }
    else if(t < 26.5){ lineToHighlight = 6;}
    else if(t < 27.5){ lineToHighlight = 0;}
    else if(t < 29){ lineToHighlight = 7;}
    else if(t < 32.5){ lineToHighlight = 8;}
    else if(t < 34.5){ lineToHighlight = 9;}
    else if(t < 37.7){ lineToHighlight = 10;}
    else if(t < 42.5){ lineToHighlight = 11;}
    else if(t < 49.5){ lineToHighlight = 12;}
    else if(t < 50.5){ lineToHighlight = 13;}
    else if(t < 58){ lineToHighlight = 14;}
    else if(t < 60.5){ lineToHighlight = 15;}
    else if(t < 62.9){ lineToHighlight = 16;}
    else if(t < 63.6){ lineToHighlight = 0;}
    else if(t < 69.2){ lineToHighlight = 17;}
    else if(t < 70.3){ lineToHighlight = 18;}
    else if(t < 71){ lineToHighlight = 0;}
    else if(t < 76){ lineToHighlight = 19;}
    else if(t < 77.6){ lineToHighlight = 20;}
    else if(t < 80.5){ lineToHighlight = 21;}
    else if(t < 83){ lineToHighlight = 22;}
    else if(t < 91){ lineToHighlight = 23;}
    else if(t < 92.3){ lineToHighlight = 24;}
    else if(t < 94){ lineToHighlight = 25;}
    else if(t < 95.2){ lineToHighlight = 26;}
    else if(t < 97){ lineToHighlight = 27;}
    else if(t < 99.7){ lineToHighlight = 28;}
    else if(t < 101){ lineToHighlight = 0;}
    else if(t < 109){ lineToHighlight = 29;}
    else if(t < 110){ lineToHighlight = 0;}
    else if(t < 112){ lineToHighlight = 30;}
    else if(t < 113){ lineToHighlight = 31;}
    else if(t < 117.4){ lineToHighlight = 32;}
    else if(t < 121.4){ lineToHighlight = 33;}
    else if(t < 123){ lineToHighlight = 34;}
    else if(t < 124.9){ lineToHighlight = 35;}
    else if(t < 129.2){ lineToHighlight = 36;}
    else if(t < 137.2){ lineToHighlight = 37;}
    else if(t < 139.99){ lineToHighlight = 38;}
    else if(t < 141.06){ lineToHighlight = 39;}
    else if(t < this.duration){ lineToHighlight = 40;}
    else lineToHighlight = 0;

    if($('.highlight-line') && $('.highlight-line').attr('id') != lineToHighlight){
      $('.highlight-line').removeClass('highlight-line');
    }

    $('#' + lineToHighlight).addClass('highlight-line');

    if( t < 20 ) {
      if( ! $('.scriptSection:eq(0)').hasClass('highlight-section')){
        $('.scriptSection').removeClass('highlight-section');
        $('.scriptSection:eq(0)').addClass('highlight-section');
      }
    }
    else if (t < this.duration ){
      if( ! $('.scriptSection:eq(1)').hasClass('highlight-section')){
        $('.scriptSection').removeClass('highlight-section');
        $('.scriptSection:eq(1)').addClass('highlight-section');
      }
    }
    else {
      $('.scriptSection').removeClass('highlight-section');
    }

  });
});
