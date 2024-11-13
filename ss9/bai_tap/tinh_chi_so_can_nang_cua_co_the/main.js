function kiemtra() {
    let weight = document.getElementById("weight").value;
    let height = document.getElementById("height").value;
    let result;
    let bmi;
    bmi=weight/(height*2);
   if (bmi<18.5){
       result = 'Result :'+'Underweight';
   }else if(18.5<=bmi<25.0){
        result = 'Result :'+'Normal';
   }else if(15.0<=bmi<30.0){
       result = 'Result :'+'Overweight';
   }else {
       result = 'Result :'+'Obese';
   }
   document.getElementById('result').innerHTML = result;
}