// document.addEventListener("DOMContentLoaded", function() {
    const wh = window.innerHeight;
//     console.log(wh);

//     const bodyHeight = document.body.offsetHeight;
//     console.log(bodyHeight);

//     var footer = document.getElementById("footer");

//     if (wh > bodyHeight) {
//         footer.classList.add("bottom");
//     } else {
//         footer.classList.remove("bottom");
//     }
// });

document.addEventListener("scroll", function(){
    var vonal = document.getElementById("hr");

    if (window.scrollY > (wh*0.2)){
        vonal.style.filter = "opacity(1.0)";
    }
    else{
        vonal.style.filter = "opacity(0.0)";
    }
});