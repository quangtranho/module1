function doi() {
    let met = document.getElementById("met").value;
    let ft;
    ft = 'ft:' + met * 3.2808;
    document.getElementById("ft").innerHTML = ft;
}