const err = document.getElementById('err');
const form = document.getElementById('form');
const cont0 = document.getElementById('cont0');
const cont1 = document.getElementById('cont1');
const cont2 = document.getElementById('cont2');
const navDivv0 = document.getElementById('navDivv0');
const navDivv1 = document.getElementById('navDivv1');
const plan = document.getElementById('plan');
const planboxcont = document.getElementById('planboxcont');
const navEnd = document.getElementById('navEnd');
const read0 = document.getElementById('read0');
const read1 = document.getElementById('read1');
const read2 = document.getElementById('read2');

const error = document.getElementById('error');
const error2 = document.getElementById('error2');
const passinfo = document.getElementById('passinfo');
const inform = document.getElementById('inform');




//buttons
const navNext0 = document.getElementById('navNext0');
const navNext1 = document.getElementById('navNext1');
const navNext2 = document.getElementById('navNext2');
const choose1 = document.getElementById('choose1');
const choose2 = document.getElementById('choose2');
const choose3 = document.getElementById('choose3');
const navback1_0 = document.getElementById('navback1_0');
const readmore0 = document.getElementById('readmore0');
const readmore1 = document.getElementById('readmore1');
const readmore2 = document.getElementById('readmore2');
const readless0 = document.getElementById('readless0');
const readless1 = document.getElementById('readless1');
const readless2 = document.getElementById('readless2');


//const readless0 = document.getElementById('readless0');
const navback0 = document.getElementById('navback0');

const navback1 = document.getElementById('navback1');
const navback2 = document.getElementById('navback2');



//inputs
const schoolname = document.getElementById('schoolname');
const username = document.getElementById('username');
const address = document.getElementById('address');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password1 = document.getElementById('password1');
const babybox = document.getElementById('babybox');
const premiumbox = document.getElementById('premiumbox');
const free = document.getElementById('freebox');
const showpass = document.getElementById('showpass');


/*
//validation
    if (window.location.href.indexOf("adminsignup=empty") != -1){
     err.innerHTML=  '<div style="width: 100%; text-align:center; color:red;"><small>you did not fill in all required fields</small></div>';
     

    }
    if (window.location.href.indexOf("adminsignup=plan") != -1){
        err.innerHTML=  '<div style="width: 100%; text-align:center; color:red;"><small> Please choose a plan. Premium, baby or free</small></div>';
        
   
       } else if (window.location.href.indexOf("adminsignup=len") != -1){
        err.innerHTML=  '<div style="width: 100%; text-align:center; color:red;"><small> letters must not exceed 255</small></div>';
        

    } else if (window.location.href.indexOf("adminsignup=char") != -1){
        err.innerHTML=  '<div style="width: 100%; text-align:center; color:red;"><small>only hyphens are allowed to mix with letters</small></div>';
   
    } else if (window.location.href.indexOf("adminsignup=email") != -1){
        err.innerHTML=  '<div style="width: 100%; text-align:center; color:red;"><small> the email you entered is invalid</small></div>';
   
    } else if (window.location.href.indexOf("adminsignup=password") != -1){
        err.innerHTML=  '<div style="width: 100%; text-align:center; color:red;"><small> password must be upto 5 letters and contain atleast one capital letter, one symbol and one number </small></div>';
   
    } else if (window.location.href.indexOf("adminsignup=match") != -1){
        err.innerHTML=  '<div style="width: 100%; text-align:center; color:red;"><small> password does not match</small></div>';
   
    }

*/

//plans

readmore0.addEventListener('click' , (e)=>{
    read0.style.display ='block';
   
})

readmore1.addEventListener('click' , (e)=>{
    read1.style.display ='block';
})

readmore2.addEventListener('click' , (e)=>{
    read2.style.display ='block';
})

readless0.addEventListener('click' , (e)=>{
    read0.style.display ='none';
})

readless1.addEventListener('click' , (e)=>{
    read1.style.display ='none';
})

readless2.addEventListener('click' , (e)=>{
    read2.style.display ='none';
})


choose1.addEventListener('click' , (e)=>{
    planboxcont.style.display ='block';
    cont0.style.display ='block';
    navDivv0.style.display ='block';
    plan.style.display ='none';
    form.style.display ='block';
    premiumbox.checked= true;
   

})

choose2.addEventListener('click' , (e)=>{
    planboxcont.style.display ='block';
    cont0.style.display ='block';
    navDivv0.style.display ='block';
    plan.style.display ='none';
    form.style.display ='block';
    babybox.checked= true;
   
})

choose3.addEventListener('click' , (e)=>{
    planboxcont.style.display ='block';
    cont0.style.display ='block';
    navDivv0.style.display ='block';
    plan.style.display ='none';
    form.style.display ='block';
    free.checked= true;
   

})

premiumbox.addEventListener('click' , (e)=>{
    free.checked= false;
    babybox.checked= false;

})

babybox.addEventListener('click' , (e)=>{
    premiumbox.checked= false;
    free.checked= false;

})

free.addEventListener('click' , (e)=>{
    premiumbox.checked= false;
    babybox.checked= false;

})

//end of plan








navNext0.addEventListener('click' , (e)=>{
    if(schoolname.value =="" || username.value ==""){
        error.style.display='block';
        error.innerHTML='<span style="color:red;">school name and login id cannot be empty</span>';

    }else{
            cont0.style.display ='none';
            navDivv0.style.display ='none';
            cont2.style.display ='block';
            navDivv1.style.display ='block';
            
    }

})

schoolname.addEventListener('input' , (e)=>{
    if(error.style.display !='none'){
        error.style.display='none';

    }

})

navback0.addEventListener('click' , (e)=>{

    cont0.style.display ='none';
    navDivv0.style.display ='none';
    planboxcont.style.display ='none';
    plan.style.display ='block';
    premiumbox.checked=false;
    babybox.checked=false;
    free.checked=false;



})

navback1.addEventListener('click' , (e)=>{
    cont2.style.display ='block';
    navDivv1.style.display ='block';
    cont1.style.display ='none';
    navEnd.style.display ='none';
})

navback1_0.addEventListener('click' , (e)=>{
    form.style.display ='none';
    navDivv0.style.display ='none';
    navDivv1.style.display ='none';
    plan.style.display ='block';
    premiumbox.checked=false;
    babybox.checked=false;
    free.checked=false;

})


navNext2.addEventListener('click' , (e)=>{
    
    cont2.style.display ='none';
    navDivv1.style.display ='none';
    cont1.style.display ='block';
    navEnd.style.display ='block';
    

   
})

navback2.addEventListener('click' , (e)=>{
    cont0.style.display ='block';
    navDivv0.style.display ='block';
    cont2.style.display ='none';
    navDivv1.style.display ='none';
})

password.addEventListener('click' , (e)=>{
    inform.innerHTML='<div style="width: 100%; color:fuchsia; text-align:center;"><small>for security purpose, you will be required to login</small></div>';
})




// NOTE: The "(input)" event doesn't work on checkboxes in Safari or IE. As such,
		// I'm using the "(click)" event to make this works cross-browser
showpass.addEventListener( "click", handleToggleClick, false );

// I handle the toggle click, changing the TYPE of password input
function handleToggleClick( event ) {
    if ( this.checked ) {
    password.type = "text";
    password1.type = "text";

    } else {
    password.type = "password";
    password1.type = "password";

}

}


 