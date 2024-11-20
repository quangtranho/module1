function tinh() {
    let a = document.getElementById('a').value;
    let b = document.getElementById('b').value;
    let result;
    result = "Diện tích hình tam giác vuông là :" + parseFloat(parseFloat(1 / 2) * (a * b));
    document.getElementById("result").innerHTML = result;
}