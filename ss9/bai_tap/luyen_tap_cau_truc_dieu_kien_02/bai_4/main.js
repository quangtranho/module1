function tinh() {
    let a = document.getElementById('a').value;
    let b = document.getElementById('b').value;
    let result;
    result = "Diện tích hình chữ nhật là :" + a * b;
    document.getElementById("result").innerHTML = result;
}