function changeMoney() {
    let amount = document.getElementById('amount').value;
    let from = document.getElementById('from').value;
    let to = document.getElementById('to').value;
    let result;

    if (from == "USD" && to == "VND") {
        result = 'result :' + amount * 24 + 'VND';
    } else if (from == "VND" && to == "VND") {
        result = 'result :' + amount + 'VND';
    } else if (from == "USD" && to == "USD") {
        result = 'result :' + amount + 'USD';
    } else {
        result = 'result :' + amount / 24 + 'USD';
    }
    document.getElementById("result").innerHTML = result;
}
