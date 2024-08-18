document.addEventListener("DOMContentLoaded", function () {
    // Add event listener when the DOM is fully loaded
    let inputElement = document.getElementById("num");
    let resultElement = document.getElementById("result");

    // listen event when input
    inputElement.addEventListener("input", function () {
        // Set to default if empty text
        if (inputElement.value == "") {
            resultElement.textContent = "Result: "
            return
        }
        // Get the value entered by the user
        let inputValue = parseInt(inputElement.value, 10);
        let result = "Invalid Number"
        // validate number result
        if (inputValue <= 40) result = "E"
        if (inputValue > 40 && inputValue <= 55) result = "D"
        if (inputValue > 55 && inputValue <= 60) result = "C"
        if (inputValue > 60 && inputValue <= 65) result = "BC"
        if (inputValue > 65 && inputValue <= 70) result = "B"
        if (inputValue > 70 && inputValue <= 80) result = "AB"
        if (inputValue > 80 && inputValue <= 100) result = "A"

        // Update the result element with the input value
        resultElement.textContent = "Result: " + result;
    });
});