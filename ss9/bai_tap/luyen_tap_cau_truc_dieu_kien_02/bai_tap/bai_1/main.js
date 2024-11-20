function doi() {
    let C = document.getElementById('C').value;
    let F ;
    F="F:"+(C*9/5+32);
    document.getElementById('F').innerHTML = F;
}