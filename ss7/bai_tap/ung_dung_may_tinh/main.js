    function  add() {
        let first = document.getElementById('first').value;
        let second = document.getElementById('second').value;
        let Result = "Result: " + (parseFloat(first)+parseFloat(second));
        document.getElementById('Result').innerHTML = Result;
    }
    function sub(){
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let Result = "Result: " + (parseFloat(first)-parseFloat(second));
    document.getElementById('Result').innerHTML = Result;
    }
    function multi(){
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let Result = "Result: " + (parseFloat(first)*parseFloat(second));
    document.getElementById('Result').innerHTML = Result;
    }
    function div(){
    let first = document.getElementById('first').value;
    let second = document.getElementById('second').value;
    let Result = "Result: " + (parseFloat(first)/parseFloat(second));
    document.getElementById('Result').innerHTML = Result;
    }