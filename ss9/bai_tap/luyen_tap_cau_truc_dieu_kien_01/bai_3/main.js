function kiemtra() {
    let nhap = parseFloat(document.getElementById('nhap').value);
    let result;

    if (nhap !== 0) {
        if (nhap > 0) {
            result = 'Lớn hơn 0';
        } else {
            result = 'Nhỏ hơn 0';
        }
    } else {
        result = 'Số đó phải khác 0';
    }

    document.getElementById('result').innerHTML = result;
}