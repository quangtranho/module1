function result() {
    let gia =  document.getElementById('gia').value;
    let phantram = document.getElementById('phantram').value;
    let result;
    result = "Result :"+(parseFloat(gia)*(parseFloat(phantram)/100));
    document.getElementById("result").innerHTML = result;

}