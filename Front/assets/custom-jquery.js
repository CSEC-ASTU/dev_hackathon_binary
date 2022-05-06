function hoverDiv(e,div){

    const popup = $(div).parent().next()
    popup.addClass("d-md-block")
    return false;
}

function mouseLeave(e,div){

    const popup = $(div).parent().next()
    popup.removeClass("d-md-block");
    return false;
}