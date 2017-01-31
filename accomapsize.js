function onResize() {
    $('#map5').height($('#map5').width());
    $('#map6').height($('#map6').width());
    $('#map7').height($('#map7').width());
}

$(window).resize(onResize);
$(document).ready(onResize);
