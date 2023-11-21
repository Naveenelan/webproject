function validateEmail(email) {
    var emailError = document.getElementById("emailError");

    if (/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(email)) {
        emailError.innerHTML = "";
    } else {
        emailError.innerHTML = "Invalid email address";
    }
}

function validatePass(password){
    var passError = document.getElementById("passErr");
     if (!/[A-Z]/.test(password)) {
        passError.textContent = "Password must contain at least 1 uppercase letter.";
    } else if (!/[0-9]/.test(password)) {
        passError.textContent = "Password must contain at least 1 number.";
    } 
    else if (password.length < 8 ){
        passError.textContent = "Minimum 8 characters";
    }
    else{
        passError.textContent = "";
    }
}

function validateCPass(){ 
    var passField = document.getElementById("Password");
    var cnfPass = document.getElementById("cnfrmpass");
    var passError = document.getElementById("passErr");
    if (passField.value !== cnfPass.value){
    passError.textContent = "Passwords do not match";
    }else{
        passError.textContent = "";
    }
}

function passvisi (){
var Password = document.getElementById("Password");
var eyeicon = document.getElementById("eyeicon");

if(Password.type == "password"){
    Password.type = "text";
    eyeicon.src="eyeopen.png";
}else{
    Password.type= "password";
    eyeicon.src="eyeclose.png";
}
}

function cpassvisi (){
    var Password = document.getElementById("cnfrmpass");
    var eyeiconcp = document.getElementById("eyeiconcp");
    
    if(Password.type == "password"){
        Password.type = "text";
        eyeiconcp.src="eyeopen.png";
    }else{
        Password.type= "password";
        eyeiconcp.src="eyeclose.png";
    }
    }


function validateForm(event){
    document.getElementById('myForm').submit();
}
