var fname = document.getElementsByClassName("inputStyle")[0];
var lname = document.getElementsByClassName("inputStyle")[1];
var email = document.getElementsByClassName("inputStyle")[2];
var phoneNumber = document.getElementsByClassName("inputStyle")[3];
var password = document.getElementsByClassName("inputStyle")[4];
var ConfirmPassword = document.getElementsByClassName("inputStyle")[5];

var btn = document.getElementsByClassName("SignupBtn")[0];
btn.addEventListener("click", function(event){
    
    if( (fname.value == "") && ( lname.value == "" ) && ( email.value == "" ) && ( phoneNumber.value == "" ) && ( password.value == "" ) && (ConfirmPassword.value == "")){
        event.preventDefault();
        alert("Please fill the form!");
        fname.style.border = "2px solid rgb(248, 2, 2)";
        lname.style.border = "2px solid rgb(248, 2, 2)";
        email.style.border = "2px solid rgb(248, 2, 2)";
        phoneNumber.style.border = "2px solid rgb(248, 2, 2)";
        password.style.border = "2px solid rgb(248, 2, 2)";
        ConfirmPassword.style.border = "2px solid rgb(248, 2, 2)";
    }else{
        if( fname.value == "" ){
            event.preventDefault();
            alert("Please enter your first name!");
            fname.style.border = "2px solid rgb(248, 2, 2)";
        }else{
            fname.style.border = "1px solid rgb(91, 91, 91)";
        }
         
        if( lname.value == "" ){
            event.preventDefault();
            alert("Please enter your last name!");
            lname.style.border = "2px solid rgb(248, 2, 2)";
        }else{
            lname.style.border = "1px solid rgb(91, 91, 91)";        
        }
    
        if( email.value == "" ){
            event.preventDefault();
            alert("Please enter your email!");
            email.style.border = "2px solid rgb(248, 2, 2)";
        }else{
            checkEmail(email.value);
        }
    
        if( phoneNumber.value == "" ){
            event.preventDefault();
            alert("Please enter your phone number!");
            phoneNumber.style.border = "2px solid rgb(248, 2, 2)";
        }else{
            checkPhoneNumber(phoneNumber.value);
        }
    
        if( password.value == "" ){
            event.preventDefault();
            alert("Please enter password!");
            password.style.border = "2px solid rgb(248, 2, 2)";
        }else{
            checkPassword(password.value);
        }
    
        if( ConfirmPassword.value == "" ){
            event.preventDefault();
            alert("Please confirm your password!");
            ConfirmPassword.style.border = "2px solid rgb(248, 2, 2)";
        }else{
            ConfirmPassword.style.border = "1px solid rgb(91, 91, 91)";
        }

        if( !(password.value == ConfirmPassword.value) ) {
            event.preventDefault();
            alert("Your Password does not match!");
            password.style.border = "2px solid rgb(248, 2, 2)";
            ConfirmPassword.style.border = "2px solid rgb(248, 2, 2)";
        }else{
            password.style.border = "1px solid rgb(127, 127, 127)";
            ConfirmPassword.style.border = "1px solid rgb(91, 91, 91)";
        }
    }

    function checkEmail(str){
        var substr1 = "@gmail.com";
        var substr2 = "@Gmail.com";
    
        if( str.includes(substr1) || str.includes(substr2) ){
          email.style.border = "1px solid rgb(91, 91, 91)";
        }else{
          event.preventDefault();
          email.style.border = "2px solid rgb(248, 2, 2)";
          alert("Please enter the email in correct format.");
        }
    }
    
    function checkPhoneNumber(str){
        if( str.length < 10 ){
            event.preventDefault();
            phoneNumber.style.border = "2px solid rgb(248, 2, 2)";
            alert("incorrect phone number!");
        }else{
            phoneNumber.style.border = "1px solid rgb(91, 91, 91)";
        }
    }
        
    function checkPassword(str){
        const minLength = 8;
        const uppercasePattern = /[A-Z]/;
        const specialCharPattern = /[!@#$%^&*(),.?":{}|<>]/;
            
        if (str.length < minLength) {
            event.preventDefault();
            ConfirmPassword.style.border = "2px solid rgb(248, 2, 2)";
            alert("Password should be minimum of 8 characters!");
        }
        else if( !uppercasePattern.test(str) ){
            event.preventDefault();
            ConfirmPassword.style.border = "2px solid rgb(248, 2, 2)";
            alert("Password should contain one UpperCase Character!");
        }
        else if( !specialCharPattern.test(str) ){
            event.preventDefault();
            ConfirmPassword.style.border = "2px solid rgb(248, 2, 2)";
            alert("Password should contain one special Character!");
        }else{
            ConfirmPassword.style.border = "1px solid rgb(91, 91, 91)";
        }
    }
    
});

