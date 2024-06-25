document.addEventListener("DOMContentLoaded", function() {
    const logo = document.getElementById("logo");
    if (logo) {
        logo.addEventListener("dblclick", function(event) {
            window.location.href = "/login";
        });
    }
});