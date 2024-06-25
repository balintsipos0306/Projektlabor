document.addEventListener("DOMContentLoaded", function() {
    const wh = window.innerHeight;
    // console.log(wh);

    const bodyHeight = document.body.offsetHeight;
    const bodyWidth = document.body.offsetWidth;
    const footer = document.getElementById("footer");

    if (bodyWidth <= 1300) {
        footer.classList.add("bottom");
    }
    else{
        footer.classList.remove("bottom");
    }

});