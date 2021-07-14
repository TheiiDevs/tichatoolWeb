const admin = document.getElementById('admin');
const student = document.getElementById('student');
const info = document.getElementById('info');

function fn1(){

    if(admin.checked == true){
        window.location.href="reg9.html";
    }

    if(student.checked == true){
        window.location.href="reg10.html";
    }

    if(student.checked == false && admin.checked== false){
      
        info.innerHTML="<small style = \"color:red; text-align:center;\" > please click one of the buttons above, admin or student</small>";
    }

}
 