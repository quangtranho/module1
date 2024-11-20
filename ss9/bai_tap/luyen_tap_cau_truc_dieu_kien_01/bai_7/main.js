function tinh() {
    let codinh = document.getElementById("codinh").value;
    let noimang = document.getElementById("noimang").value;
    let ngoaimang = document.getElementById("ngoaimang").value;
    let thgnoimang = document.getElementById("thgnoimang").value;
    let thgngoaimang = document.getElementById("thgngoaimang").value;
    let phibosung = document.getElementById("phibosung").value;
    let result;
    result = "Result :" + (parseInt(codinh) + (parseInt(noimang) * parseInt(thgnoimang)) + (parseInt(ngoaimang) * parseInt(thgngoaimang)) + parseInt(phibosung));
    document.getElementById("result").innerHTML = result;
}