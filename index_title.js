var main_height2 = function () {
    var height = -427;
    height += window.innerHeight;
    if ($(window).width() <= 330) {
        height += 150;
        document.getElementById("mainjumbo").style.height = height + "px";
        document.getElementById("bodybb").style.paddingTop = "60px";
    }
    if ($(window).height() >= 768 && $(window).height() <= 1280 && window.innerHeight > window.innerWidth) {
        height -= 100;
        document.getElementById("mainjumbo").style.height = height + "px";
    } 
    else {
        document.getElementById("mainjumbo").style.height = height + "px";
    }
};

$(document).ready(main_height2);

window.onresize = function(event) {
   $(document).ready(main_height2);
}