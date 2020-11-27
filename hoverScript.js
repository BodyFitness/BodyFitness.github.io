function HoverImg(idImagem)
{
    document.getElementById(idImagem).src = "img/icon-" + idImagem + "-hv.png";
}

function LeaveImg(idImagem)
{
    document.getElementById(idImagem).src = "img/icon-" + idImagem + ".png";
}

function GrowImg(idImagem)
{
    document.getElementById(idImagem).style = "z-index: 2000;"
}
