window.addEventListener("load", () => {
    const loader = document.querySelector(".loader");

    loader.classList.add("loader-hidden");

    loader.addEventListener("transitioned", () => {
        document.body.removeChild("loader");
    })
});
var value;

document.addEventListener("scroll", function() {

    if (window.innerWidth <1450){
        value = 800;
    }
    else{
        value = 20;
    }

    var logo = document.getElementById("logo");
    var header = document.getElementById("myheader");
    var nav = document.getElementById("navv");
    var links = document.querySelectorAll(".nav-link");

    if(window.scrollY > value){
        logo.style.display = "none";
        header.style.backgroundColor = "#3F4E4F";
        header.style.paddingRight = "5%";
        header.style.position= "fixed";
        nav.style.justifyContent = "right";
        for (var i = 0; i < links.length; i++) {
            links[i].style.color = "white";
            links[i].style.fontSize = "medium";
            links[i].classList.add("white");
        }
    }
    else{
        logo.style.display = "block";
        header.style.backgroundColor = "white";
        header.style.paddingRight = "0%";
        header.style.position = "relative";
        nav.style.justifyContent = "center";
        for (var i = 0; i < links.length; i++) {
            links[i].style.color = "black";
            links[i].style.fontSize = "medium";
            links[i].classList.remove("white");
        }
    }
});
