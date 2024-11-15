function kiemtra() {
    let number1 = document.getElementById("number1").value;
    let number2 = document.getElementById("number2").value;
    let number3 = document.getElementById("number3").value;
    let result;
    if (parseInt(number1) > parseInt(number2) && parseInt(number1) > parseInt(number3)) {
        result = number1 + ' là số lớn nhất';
    }else if(parseInt(number2) > parseInt(number3) && parseInt(number2) > parseInt(number1)) {
        result = number2 + ' là số lớn nhất';
    }else if (parseInt(number3)>parseInt(number1) && parseInt(number3) > parseInt(number2)) {
        result = number3 + ' là số lớn nhất';
    }else {
        result = number3 + ' là số lớn nhất';
    }
    document.getElementById('result').innerHTML = result;
}