let option1 = document.getElementById("option1");
let option2 = document.getElementById("option2");
let option3 = document.getElementById("option3");
let week = document.getElementById("week");
let month = document.getElementById("month");


option1.addEventListener("click" , function(){
    option1.style.cssText = "background: rgba(255, 144, 14, 0.6);color:#fff;";
    option2.style.cssText = "background: rgba(217, 217, 217, 0.1);";
    option3.style.cssText = "background: rgba(217, 217, 217, 0.1);";
    week.style.cssText = "display: none;";
    month.style.cssText = "display: none;";
});
option2.addEventListener("click" , function(){
    option1.style.cssText = "background: rgba(217, 217, 217, 0.1);";
    option2.style.cssText = "background: rgba(255, 144, 14, 0.6);color:#fff;";
    option3.style.cssText = "background: rgba(217, 217, 217, 0.1);";
    week.style.cssText = "display: flex;";
    month.style.cssText = "display: flex;";
});
option3.addEventListener("click" , function(){
    option1.style.cssText = "background: rgba(217, 217, 217, 0.1);";
    option2.style.cssText = "background: rgba(217, 217, 217, 0.1);";
    option3.style.cssText = "background: rgba(255, 144, 14, 0.6);color:#fff;";
    week.style.cssText = "display: none;";
    month.style.cssText = "display: flex;";
});

