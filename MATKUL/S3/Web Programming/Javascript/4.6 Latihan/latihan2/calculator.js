let displayValue = '';

// func append display value example 1+2
function appendToDisplay(value) {
    displayValue += value;
    document.getElementById('display').value = displayValue;
}

// func clear display value
function clearDisplay() {
    displayValue = '';
    document.getElementById('display').value = '';
}

// func calculate result
function calculateResult() {
    // using try catch to handle error
    try {
        // using eval func for simple calculate opration number
        displayValue = eval(displayValue);
        document.getElementById('display').value = displayValue;
    } catch (error) {
        document.getElementById('display').value = 'Error';
    }
}
