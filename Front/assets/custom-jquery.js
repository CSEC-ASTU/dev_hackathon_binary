function hoverDiv(e,div){

    const popup = $(div).parent().next()
    popup.removeClass("d-none")
    return false;
}

function mouseLeave(e,div){

    const popup = $(div).parent().next()
    popup.addClass("d-none");
    return false;
}