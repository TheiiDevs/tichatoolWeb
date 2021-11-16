const cont0 = document.getElementById('cont0');
const cont1 = document.getElementById('cont1');
const cont2 = document.getElementById('cont2');
const plan = document.getElementById('plan');

const navNext0 = document.getElementById('navNext0');
const navNext1 = document.getElementById('navNext1');
const navNext2 = document.getElementById('navNext2');
const navback1 = document.getElementById('navback1');
const navback1 = document.getElementById('navback2');

const navback1 = document.getElementById('navback1');

navNext0.addEventListener('click' , (e)=>{
    cont0.style.display ='none';
    cont1.style.display ='block';

})

function fn1(){

    if(admin.checked == true){
        window.location.href = "/reg9" ;
    }

    if(student.checked == true){
        window.location.href = "/reg10" ;
    }

    if(student.checked == false && admin.checked== false){
      
        info.innerHTML="<small style = \"color:red; text-align:center;\" > please click one of the buttons above, admin or student</small>";
    }

}
 