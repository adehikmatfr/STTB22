document.addEventListener("DOMContentLoaded", function() {
    let square = document.getElementById("square");
    let circle = document.getElementById("circle");
    let triangle = document.getElementById("triangle");

    square.addEventListener("dblclick", function() {
        changeBgColor(square);
    });

    circle.addEventListener("dblclick", function() {
        changeBgColor(circle);
    });

    triangle.addEventListener("dblclick", function() {
        changeBorderColor(triangle);
    });

    function changeBgColor(element) {
        let randomColor = getRandomColor();
        element.style.backgroundColor = randomColor;
    }

    function changeBorderColor(element) {
        let randomColor = getRandomColor();
        element.style.borderBottom = `100px solid ${randomColor}`;
    }

    function getRandomColor() {
        let letters = "0123456789ABCDEF";
        let color = "#";
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
});
