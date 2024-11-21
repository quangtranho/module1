function exe() {
    let a = document.getElementById("a").value;
    let b = document.getElementById("b").value;
    let x;
    x = "x=" + parseFloat(-b / a);
    document.getElementById("x").innerHTML = x;
}