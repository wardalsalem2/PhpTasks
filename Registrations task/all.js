function nam(event){
    let namee = document.getElementById("namee").value;
    let txtname =document.getElementById("txname");
if(namee ==""){
    txtname.textContent= "please inter your name";
    txtname.style.color="red"; 
    return false;
}      
else {
    txtname.textContent = "Looks good!";
    txtname.style.color = "green";
    return true;
}
}

var users = [];
function validate(event){
    let tx1 = document.getElementById("txemail");
    let emai=document.getElementById("email").value
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
if (reg.test(emai) == false){ 
    tx1.textContent="please inter correct email";
    tx1.style.color="red";
    return false;
}
else{
    tx1.textContent = "Looks good!";
    tx1.style.color = "green";
    return true;
}
}


function pas(event) {
    let pass = document.getElementById("pass").value;
    let masspass = document.getElementById("masspass");

if (pass.length > 18 || pass.length < 6) {
    masspass.textContent = "The password is more than 18 or less than 6. Please enter a number between 6-18.";
    masspass.style.color="red"; 
    return false;
}

const hasUpperCase = /[A-Z]/.test(pass);
if (!hasUpperCase) {
    masspass.textContent = "The password must contain at least one uppercase letter.";
    masspass.style.color="red"; 
    return false;
}

const hasNumber = /\d/.test(pass);
if (!hasNumber) {
    masspass.textContent = "The password must contain at least one number.";
    masspass.style.color="red"
    return false;
}

const hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(pass);
if (!hasSpecialChar) {
    masspass.textContent = "The password must contain at least one special character (e.g., !, @, #).";
    masspass.style.color="red"
    return false;
}
    masspass.textContent = "Password is valid!";
    masspass.style.color="green"
    return true;
}

function equalpass(event){
    let pass2 = document.getElementById("pass2").value;
    let pass = document.getElementById("pass").value;
    let masspass2 = document.getElementById("masspass2"); 
if(pass2 ==""){
    masspass2.textContent="please enter the password";
    masspass2.style.color="red";
    return false;
}
else if(pass === pass2 ){
    masspass2.textContent="The password matches";
    masspass2.style.color="green";
    return true;
}
else{
    masspass2.textContent="The password NOT matches";
    masspass2.style.color="red";
    return false;
}
}

var iduser = parseInt(localStorage.getItem("iduser")) || 1;
function register(event) {
    if (validate(event) && pas(event) && equalpass(event) && nam(event)) {

        let user = {
            name: document.getElementById("namee").value,

            email: document.getElementById("email").value,
            
            password: document.getElementById("pass").value,

            id:iduser
        };
        iduser++;
        localStorage.setItem("iduser", iduser);

        let storedUsers = JSON.parse(localStorage.getItem("users")) || [];
        storedUsers.push(user);
        localStorage.setItem("users", JSON.stringify(storedUsers)); 
        window.location.href = 'login.php';
    } else {
        event.preventDefault();
    }
}
function haveacc(){
    window.location.href="login.php";
}


