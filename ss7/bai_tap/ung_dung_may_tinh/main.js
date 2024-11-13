function add() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let Result = "Result: " + (parseFloat(first) + parseFloat(second));
    document.getElementById('Result').innerHTML = Result;
}

function sub() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let result = "Result: " + (parseFloat(first) - parseFloat(second));
    document.getElementById('Result').innerHTML = result;

}

function multi() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let result = "Result: " + (parseFloat(first) * parseFloat(second));
    document.getElementById('Result').innerHTML = result;
}

function div() {
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let Result = "Result: " + (parseFloat(first) / parseFloat(second));
    document.getElementById('Result').innerHTML = Result;
}