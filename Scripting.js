//This is the JavaScript file for the form validation
//Disply error messge on PHP Page
function printError(elemId, msg) {
    document.getElementById(elemId).innerHTML = msg;

}


//This function will ensure that the form is validated before submitting
function validateForm() {
    //These are the inputs from the html text/input elements
    var firstName = document.appForm.firstName.value;
    var middleName = document.appForm.middleName.value;
    var lastName = document.appForm.lastName.value;
    var age = document.appForm.age.value;
    var idNum = document.appForm.idNum.value;
    var location = document.appForm.location.value;
    var heights = document.appForm.heights.value;

    //Track whether or not the inputs are valid
    var firstNameValid = true;
    var middleNameValid = true;
    var lastNameValid = true;
    var ageValid = true; 
    var idNumValid = true;
    var locationValid = true;
    var heightsValid = true;
    
    //Clear any error messages
    printError ("firstNameErr", "");
    printError ("middleNameErr", "");
    printError ("lastNameErr", "");
    printError ("ageErr", "");
    printError ("idNumErr", "");
    printError ("locationErr", "");
    printError ("heightsErr", "");
   
    

    //Check to see if the user entered a valid first name
    if (firstName == "") {
        printError ("firstNameErr", "Please enter your name. ");
        firstNameValid = false;
    }
    else {
        printError ("firstNameErr", "");
    }

    //Check to see if the user entered a valid middle name
    if (middleName == "") {
        printError ("middleNameErr", "Please enter your middle name. ");
        middleNameValid = false;
    }
    else {
        printError ("middleNameErr", "");
    }

    //Check to see if the user entered a valid last name
    if (lastName == "") {
        printError ("lastNameErr", "Please enter your last name. ");
        lastNameValid = false;
    }
    else {
        printError ("lastNameErr", "");
    }

    //Check to see if the user entered a valid age
    if (age == "") {
        printError ("ageErr", "Please enter your age. ");
        ageValid = false;
    }
    else {
        printError ("ageErr", "");
    }

    //Check to see if the user entered a valid ID number
    if (idNum == "") {
        printError ("idNumErr", "Please enter your ID number. ");
        idNumValid = false;
    }
    else {
        printError ("idNumErr", "");
    }


    //Check to see if the user entered a valid location
    if (location == "") {
        printError ("locationErr", "Please enter your location. ");
        locationValid = false;
    }
    else {
        printError ("locationErr", "");
    }


    //Check to see if the user entered a valid height
    if (heights == "") {
        printError ("heightsErr", "Please enter if you are afraid of heights. ");
        heightsValid = false;
    }
    else { 
        printError ("heightsErr", "");
    }

    //Prevent the form from being submitted if there are any errors
    if (!firstNameValid ||!middleNameValid|| !lastNameValid || !age || !idNum || !location || !heights) {
        return false;
    }
    else {
        alert("Thank you for your submission!");
    }
}



