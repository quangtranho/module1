function sosanh() {
    let a = document.getElementById("a").value;
    let b = document.getElementById("b").value;
    let result;
    if (b!=0){
        if(parseInt(a) % parseInt(b)==0) {
        result = 'a chia hết cho b';}
        else {
        result = 'a không chia hết cho b';}
        }
    else {
        result = 'không thỏa mãn điều kiện'
    }
    document.getElementById("result").innerHTML = result;
}