function tinh(){
    let thang = document.getElementById("thang").value;
    let result;
    switch (thang) {

        case "1":
            result = 'Tháng 1 có 31 ngày';
            break;
        case "2":
            result = 'Tháng 2 có 28 ngày hoặc 29 ngày';
            break;
        case "3":
            result = 'Tháng 3 có 31 ngày';
            break;
        case "4":
            result = 'Tháng 4 có 30 ngày';
            break;
        case "5":
            result = 'Tháng 5 có 31 ngày';
            break;
        case "6":
            result = 'Tháng 6 có 30 ngày';
            break;
        case "7":
            result = 'Tháng 7 có 31 ngày';
            break;
        case "8":
            result = 'Tháng 8 có 30 ngày';
            break;
        case "9":
            result = 'Tháng 9 có 31 ngày';
            break;
        case "10":
            result = 'Tháng 10 có 30 ngày';
            break;
        case "11":
            result = 'Tháng 11 có 31 ngày';
            break;
        case "12":
            result = 'Tháng 12 có 30 ngày';
            break;
        default:

    }
    document.getElementById("result").innerHTML = result;
}