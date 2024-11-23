function tinh() {
    let bt = parseInt(document.getElementById("bt").value);
    let gk = parseInt(document.getElementById("gk").value);
    let ck = parseInt(document.getElementById("ck").value);
    let result;
    result = (bt + (2 * gk) + (3 * ck)) / 5;


        if (result > 8.0) {
            result = 'Xếp loại giỏi';
            document.getElementById("result").innerHTML = result;
        } else if (result < 8.0 && result > 6.5) {
            result = 'Xếp loại khá';
            document.getElementById("result").innerHTML = result;
        } else if (result < 6.5 && result > 5.0) {
            result = 'Xếp loại trung bình';
            document.getElementById("result").innerHTML = result;
        } else if (result < 5.0 && result > 3.5) {
            result = 'Xếp loại yếu';
            document.getElementById("result").innerHTML = result;
        } else {
            result = 'Xếp loại kém';
            document.getElementById("result").innerHTML = result;
        }

}