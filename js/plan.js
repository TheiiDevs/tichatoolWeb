const text = document.querySelector('.text');
const rbtn = document.querySelector('.rbtn');
const num1 = document.getElementById('num1');
const num2 = document.getElementById('num2');
const nextN = document.getElementById('nextN');
const prevN = document.getElementById('prevN');
const checkout = document.getElementById('checkout');
const inp = document.getElementById('inp');
const calc = document.getElementById('calc');
const output = document.getElementById('output');
const info = document.getElementById('info');
const info2 = document.getElementById('info2');


rbtn.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');
    if(rbtn.innerHTML==="read more"){
        rbtn.innerHTML= 'read less';
    }else {rbtn.innerHTML= 'read more';}
})

nextN.addEventListener('click',(e)=>{
    checkout.style.display= 'none';
    if(num1.innerHTML === "4 months"){
        num1.innerHTML = '1 year';
        num2.innerHTML = '4.8 ';
    }else {num1.innerHTML= '2 years';
    num2.innerHTML = '3.5 ';
}
})

prevN.addEventListener('click',(e)=>{
    checkout.style.display= 'none';
    if(num1.innerHTML === "2 years"){
        num1.innerHTML = '1 year';
        num2.innerHTML = '4.8 ';
    }else {num1.innerHTML= '4 months';
    num2.innerHTML = '6 ';}
})

inp.addEventListener('click',(e)=>{
    checkout.style.display= 'none';
    info.style.display= 'none';
    info2.style.display= 'none';
    
})

calc.addEventListener('click',(e)=>{
    if(num2.innerHTML== "6 "){
        var newinput = parseInt(inp.value);
        var six = 6;
        output.innerHTML=newinput*six;
   
    }else if (num2.innerHTML== "4.8 ") {
        var newinput = parseInt(inp.value);
        var six = 4.8;
        output.innerHTML=newinput*six*3;
        
    } else if(num2.innerHTML== "3.5 ") {
        var newinput = parseInt(inp.value);
        var six = 3.5;
        output.innerHTML=newinput*six*6;
        
    } if(inp.value== "" || inp.value== "0"){
        checkout.style.display= 'none';
        output.innerHTML= "0";
        info.innerHTML= "please type in a number students in the above enter box";
        info2.innerHTML= "click this box to enter number";

    }else{ checkout.style.display= 'block';}
    if(inp.value < 1){
        checkout.style.display= 'none';
        output.innerHTML= "0";
        info.innerHTML= "please type in a number students in the above enter box <br> zero or negative numbers are not allowed";

    }
})



