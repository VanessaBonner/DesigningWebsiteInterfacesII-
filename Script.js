function validateForm() {
    //The user name was entered in the form.
    var userName = document.userForm.userName.value;
    //The password was entered in the form.
    var userPassowrd = document.userForm.userPassword.value;
    
    //Reset the elements to their default looks.
    document.getElementById("errorMessage").innerHTML = "";
    document.getElementById("lblUserName").style.backgroundColor = "white";
    document.getElementById("lblPassword").style.backgroundColor = "white";

    //If no username was entered, alert the user.
    if (userName == null || userName == "") {
        document.getElementById("errorMessage").innerHTML = "UserName can't be blank!";
        document.getElementById("lblUserName").style.backgroundColor = "yellow";
        // alert("UserName can't be blank");
        document.getElementById("userName").focus();
        return false;
    }
    //If no password was entered, alert the user.
    else if (password.length < 8) {
        document.getElementById("errorMessage").innerHTML = "Password must be at least 8 characters long.";
        document.getElementById("lblPassword").style.backgroundColor = "yellow";
        document.getElementById("userPassword").focus();
        return false;
    }
}