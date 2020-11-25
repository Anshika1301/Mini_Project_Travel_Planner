//show content 1
 var button = document.getElementById("show1").addEventListener("click", function()
 {
    var my_content = document.getElementById("content1");
    if(my_content.style.display == "none")
    {
        my_content.style.display = "block"
        button.innerHTML = "Show Less";

    }
    else
    {
        my_content.style.display = "none";
        button.innerHTML = "Best time to visit";
    }
 });

//show content 1
var button1 = document.getElementsByClassName("show-2")[0].addEventListener("click", function() 
{
    var my_content2 = document.getElementsByClassName("content2");
    for(var i = 0; i < my_content2; i++)
    {
        if(my_content2[i].style.display == "none")
        {
            my_content2[i].style.display = "block"
            button1.innerHTML = "Show Less";

        }
        else
        {
            my_content2[i].style.display = "none";
            button1.innerHTML = "How to reach";
        }
    }
});


// image section
/* Demo purposes only */
$(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );

  


//   canvaslink