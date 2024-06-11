var fname = document.getElementsByClassName("inputStyle")[0];
var lname = document.getElementsByClassName("inputStyle")[1];
var email = document.getElementsByClassName("inputStyle")[2];
var phoneNumber = document.getElementsByClassName("inputStyle")[3];
var password = document.getElementsByClassName("inputStyle")[4];
var ConfirmPassword = document.getElementsByClassName("inputStyle")[5];

var btn = document.getElementsByClassName("SignupBtn")[0];

btn.addEventListener("click", function(event){

    if( email.value != "" ){
        checkEmail(email.value);
    }
    
    if( phoneNumber.value != "" ){
        checkPhoneNumber(phoneNumber.value);
    }

    if( password.value != "" ){
        checkPassword(password.value);
    }

    if( ConfirmPassword.value != "" ){
        confirmpassword(ConfirmPassword.value, password.value);
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
            password.style.border = "2px solid rgb(248, 2, 2)";
            alert("Password should be minimum of 8 characters!");
        }
        else if( !uppercasePattern.test(str) ){
            event.preventDefault();
            password.style.border = "2px solid rgb(248, 2, 2)";
            alert("Password should contain one UpperCase Character!");
        }
        else if( !specialCharPattern.test(str) ){
            event.preventDefault();
            password.style.border = "2px solid rgb(248, 2, 2)";
            alert("Password should contain one special Character!");
        }else{
            password.style.border = "1px solid rgb(91, 91, 91)";
        }
    }

    function confirmpassword(str1, str2){
        if( str1 == str2 ) {
            ConfirmPassword.style.border = "1px solid rgb(91, 91, 91)";
        }else{
            event.preventDefault();
            alert("Your Password does not match!");
            password.style.border = "2px solid rgb(248, 2, 2)";
            ConfirmPassword.style.border = "2px solid rgb(248, 2, 2)";
        }
    }
});