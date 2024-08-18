document.addEventListener("DOMContentLoaded", function () {
    let fadingSquare = document.getElementById("fadingSquare");
    let fadeButton = document.getElementById("fadeButton");
    let fade03Button = document.getElementById("fade03Button");
    let isFaded = false;

    fadeButton.addEventListener("click", function () {
        isFaded = !isFaded;
        if (isFaded) {
            fadingSquare.style.opacity = 0;
        } else {
            fadingSquare.style.opacity = 1;
        }
    });

    fade03Button.addEventListener("click", function () {
        isFaded = !isFaded;
        if (isFaded) {
            document.getElementById("square").style.backgroundColor = "blue";
        } else {
            document.getElementById("square").style.backgroundColor = "red";
        }
    })
});
