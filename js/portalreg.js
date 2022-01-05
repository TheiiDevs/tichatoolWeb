const cont0 = document.getElementById('cont0');
const cont1 = document.getElementById('cont1');
const cont2 = document.getElementById('cont2');
const cont3 = document.getElementById('cont3');
const planboxcont = document.getElementById('planboxcont');
const nav1 = document.getElementById('nav1');
const nav2 = document.getElementById('nav2');
const read1 = document.getElementById('read1');
const read2 = document.getElementById('read2');
const form = document.getElementById("form");





//buttons
const Next0 = document.getElementById('next0');
const Next1 = document.getElementById('next1');
const Next2 = document.getElementById('next2');


//const readless0 = document.getElementById('readless0');
//const back0 = document.getElementById('back0');
const back1 = document.getElementById('back1');
const bac = document.getElementById('bac');
const bak = document.getElementById('bak');



//inputs
const surname  = document.getElementById('surname');
const firstname = document.getElementById('firstname');
const thirdname = document.getElementById('thirdname');
const age = document.getElementById('age');
const grade = document.getElementById('grade');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const pass1 = document.getElementById('pass1');
const address = document.getElementById('address');

const show = document.getElementById('show');







/*

document.getElementById("form").addEventListener("click", function(event){
    event.preventDefault()
  });

*/
Next0.addEventListener('click' , (e)=>{
   
    if(surname.value == "" || firstname.value == "" || thirdname.value == ""){
        error.style.display='block';
        error.innerHTML='<span style="color:red;">please enter your Names</span>';
    }else{ cont0.style.display ='none';
        nav0.style.display ='none';
        error.style.display='none';
        cont1.style.display ='block';
        nav1.style.display ='flex';
    
}
   

})



Next1.addEventListener('click' , (e)=>{
    
    if(age.value == ""){
        error.style.display='block';
        error.innerHTML='<span style="color:red;">please enter your age</span>';
    

}else if(age.value == "" || grade.value == ""){
    error.style.display='block';
    error.innerHTML='<span style="color:red;"> age and grade are required </span>';

    }else{
        
    cont1.style.display ='none';
    nav1.style.display ='none';
    cont2.style.display ='block'; 
    nav2.style.display ='flex';
    error.style.display='none';
    }

})


Next2.addEventListener('click' , (e)=>{
    
    cont2.style.display ='none';
    nav2.style.display ='none';
    cont3.style.display ='block';
    navend.style.display ='flex';
    
   
})

back1.addEventListener('click' , (e)=>{

    cont0.style.display ='block';
    nav0.style.display ='block';
    cont1.style.display ='none';
    nav1.style.display ='none';


})

bac.addEventListener('click' , (e)=>{
    cont2.style.display ="none";
   nav2.style.display ="none";
   cont1.style.display ='block';
   nav1.style.display ='flex';
  


})

bak.addEventListener('click' , (e)=>{
    cont3.style.display ='none';
    navend.style.display ='none';
    cont2.style.display ='block';
    nav2.style.display ='flex';


})





// NOTE: The "(input)" event doesn't work on checkboxes in Safari or IE. As such,
		// I'm using the "(click)" event to make this works cross-browser
show.addEventListener( "click", handleToggleClick, false );

// I handle the toggle click, changing the TYPE of password input
function handleToggleClick( event ) {
    if ( this.checked ) {
        pass.type = "text";
        pass1.type = "text";

    } else {
    pass.type = "password";
    pass1.type = "password";

}

}


 