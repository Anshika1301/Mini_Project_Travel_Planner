function drop1()
{
    var divs = document.getElementById("content1");
    divs.classList.toggle("show");
}
window.ondblclick = function(event1)
{
    if(!event1.target.matches("#clicks1"))
    {
        var removeshow1 = document.getElementById("content1");
        if(removeshow1.classList.contains("show"))
        {
            removeshow1.classList.remove("show");
        }
    }
}


function drop2()
{
    var divs = document.getElementById("content2");
    divs.classList.toggle("show");
}
window.onmouseup = function(event2)
{
    if(!event2.target.matches("#clicks2"))
    {
        var removeshow2 = document.getElementById("content2");
        if(removeshow2.classList.contains("show"))
        {
            removeshow2.classList.remove("show");
        }
    }
}


function drop3()
{
    var divs = document.getElementById("content3");
    divs.classList.toggle("show");
}
window.onclick = function(event3)
{
    if(!event3.target.matches("#clicks3"))
    {
        var removeshow3 = document.getElementById("content3");
        if(removeshow3.classList.contains("show"))
        {
            removeshow3.classList.remove("show");
        }
    }
}