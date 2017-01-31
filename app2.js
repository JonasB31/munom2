var start = 2;
var start2 = 2;
var start3 = 1;
var start4 = 2;
var start5 = 2;

var main = function() {
    $('#logo2').click(function() {
      if(start === 2) {
        $('.menu').animate({
          left: '0px'
        }, 200);
      
        $('body').animate({
          left: '180px'
        }, 200);
        start = 1;
      }

      else if(start === 1) {
        $('.menu').animate({
          left: '-180px'
        }, 200);
      
        $('body').animate({
          left: '0px'
        }, 200);
        start = 2;
      }
    });
};



var main2 = function() {
    $('#point1').click(function() {
      $('.menu3').hide();
      $('.menu4').hide();
      $('.menu5').hide();
      $('#point4').animate({
        bottom: '0px'
      }, 200);
      $('#point6').animate({
        bottom: '0px'
      }, 200);
      $('#point8').animate({
        bottom: '0px'
      }, 200);
        
      start5 = 2;
      start4 = 2;
    
      if(start2 === 2) {
        $('.menu2').show();
      
        $('#point2').animate({
          bottom: '-=110px'
        }, 200);
        start2 = 1;
      }

      else if(start2 === 1) {
        $('.menu2').hide();
      
        $('#point2').animate({
          bottom: '0px'
        }, 200);
        start2 = 2;
      }
    });
}

var main3 = function() {
    $('#point3').click(function() {
      $('.menu2').hide();
      $('.menu4').hide();
      $('.menu5').hide();
      $('#point2').animate({
        bottom: '0px'
      }, 200);
      $('#point6').animate({
        bottom: '0px'
      }, 200);
      $('#point8').animate({
        bottom: '0px'
      }, 200);
        
      start5 = 2;
      start2 = 2;
      start4 = 2;
        
      if(start3 === 2) {
        $('.menu3').show();
      
        $('#point4').animate({
          bottom: '-=73px'
        }, 200);
        start3 = 1;
      }

      
    });
}

var main4 = function() {
    $('#point5').click(function() {
      $('.menu2').hide();
      $('.menu3').hide();
      $('.menu5').hide();
      $('#point4').animate({
        bottom: '0px'
      }, 200);
      $('#point2').animate({
        bottom: '0px'
      }, 200);
      $('#point8').animate({
        bottom: '0px'
      }, 200);
        
      start5 = 2;
      start2 = 2;
        
      if(start4 === 2) {
        $('.menu4').show();
      
        $('#point6').animate({
          bottom: '-=73px'
        }, 200);
        start4 = 1;
      }

      else if(start4 === 1) {
        $('.menu4').hide();
      
        $('#point6').animate({
          bottom: '0px'
        }, 200);
        start4 = 2;
      }
    });
}

var main5 = function() {
    $('#point9').click(function() {
      $('.menu2').hide();
      $('.menu3').hide();
      $('.menu4').hide();
      $('#point4').animate({
        bottom: '0px'
      }, 200);
      $('#point2').animate({
        bottom: '0px'
      }, 200);
      $('#point6').animate({
        bottom: '0px'
      }, 200);
        
      start2 = 2;
      start4 = 2;
        
      if(start5 === 2) {
        $('.menu5').show();
      
        $('#point8').animate({
          bottom: '-=73px'
        }, 200);
        start5 = 1;
      }

      else if(start5 === 1) {
        $('.menu5').hide();
      
        $('#point8').animate({
          bottom: '0px'
        }, 200);
        start5 = 2;
      }
    });
}

var a=document.getElementsByTagName("a");
for(var i=0;i<a.length;i++)
{
    a[i].onclick=function()
    {
        window.location=this.getAttribute("href");
        return false
    }
}

/* if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(navigator.userAgent)) {
    document.getElementById("heading12").style.display = "inline";
} */

$(document).ready(main);
$(document).ready(main2);
$(document).ready(main3);
$(document).ready(main4);
$(document).ready(main5);
$(document).ready(appp);