function kiemtra() {
    let tuoi = document.getElementById('tuoi').value;
    let result;
    if (tuoi >= 100 || tuoi >= 1) {
        if (tuoi == 15 || tuoi == 16) {
            result = "Đủ điều kiện vào lớp 10";
        } else {
            result = "Không đủ điều kiện vào lớp 10";
        }
    } else {
        result = "Nhập sai tuổi";
    }
    document.getElementById('result').innerHTML = result;
}