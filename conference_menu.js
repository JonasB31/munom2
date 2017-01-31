var main_height = function () {

    var height = -477;
    height += window.innerHeight;
    var height2 = height / 2;
    height2 -= 100;
    
    document.getElementById("slidey").style.height = height + "px";
    document.getElementById("slidey").style.maxHeight = height + "px";
    document.getElementById("GA").style.height = height + "px";
    document.getElementById("ECOSOC").style.height = height + "px";
    document.getElementById("SC").style.height = height + "px";
    document.getElementById("com_jumbo").style.top = height2 + "px";
    document.getElementById("com_jumbo2").style.top = height2 + "px";
    document.getElementById("com_jumbo3").style.top = height2 + "px";
};

var main = function () {
    $('.arrow-next').click(function () {
        var currentSlide = $('.active-slide');
        var nextSlide = currentSlide.next();
        var currentDot = $('.active-dot');
        var nextDot = currentDot.next();
        if (nextSlide.length == 0) {
            nextSlide = $('.committee').first();
            nextDot = $('.dot').first();
        }
        currentSlide.fadeOut(1000).removeClass('active-slide');
        nextSlide.fadeIn(1000).addClass('active-slide');
        currentDot.removeClass('active-dot');
        nextDot.addClass('active-dot');
    });
    $('.arrow-prev').click(function () {
        var currentSlide = $('.active-slide');
        var prevSlide = currentSlide.prev();
        var currentDot = $('.active-dot');
        var prevDot = currentDot.prev();
        if (prevSlide.length == 0) {
            prevSlide = $('.committee').last();
            prevDot = $('.dot').last();
        }
        currentSlide.fadeOut(1000).removeClass('active-slide');
        prevSlide.fadeIn(1000).addClass('active-slide');
        currentDot.removeClass('active-dot');
        prevDot.addClass('active-dot');
    });
};

$(document).ready(main);
$(document).ready(main_height);


window.onresize = function(event) {
   $(document).ready(main_height);
}