<!-- Created by: Vanessa Bonner
    Date:May 28, 2023
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="Scripting.js"></script>
    <link rel="stylesheet" href="Background.css">
    <!-- The title of the website-->
    <title>The Mars Pilot Application</title>
</head>
<body>

    <!-- The header of the website-->
    <h1>Mars Pilot Application</h1>

    <!-- The form of the website-->
    <form>
        <form name="appForm" onsubmit="return validateFrom();" action="#" method="post">
        <div class="row">
            <label>First Name</label>
            <input type="text" name="firstName" placeholder= "First Name" size="15" required/>   
            <div class="error" id="firstNameErr"></div>
        </div>

        <!-- The user will input there middle name-->
        <div class="row">
            <label>Middle Name</label>
            <input type="text" name="middleName" placeholder="Middle Name" size="15" required>
            <div class="error" id="middleNameErr"></div>
        </div>

        <!-- The user will input there last name-->
        <div class="row">
            <label>Last Name</label>
            <input type="text" name="lastName" placeholder="Last Name" size="15" required>
            <div class="error" id="lastNameErr"></div>
        </div>

        <!-- The user will input there email-->
        <div class="row">
         <label>Email</label>
            <input type="text" name="Enteremail" placeholder="Email" size="15" required>
            <div class="error" id="emailErr"></div>
        </div>

        <!-- The user will input there age-->
        <div class="row">
         <label>Age</label>
            <input type="text" name="age" placeholder="Age" size="15" required>
            <div class="error" id="AgeErr"></div>
            </div>

        <!-- The user will input there ID number-->
            <div class="row">
                <label>ID#</label>
                <input type="text" name="idNum" placeholder="ID Num" size="15" required>
                <div class="error" id="idNumErr"></div>
             </div>

        <!-- The user will input where they are from-->
         <div class="row">
                <label>Where are you from?</label>
                <input type="text" name="location" placeholder="Location" size="15" required>
                <div class="error" id="locationErr"></div>
                </div>

        <!-- The user will mark a circle box of if they are afriad of heights.-->
         <div class="row">
                <label>Are you afriad of heights?</label>
                <div class="form-inline"></div>
                <label><input type="radio" name="heights" value="yes"> Yes </label>
                <label><input type="radio" name="heights" value="no"> No</label>
                <div class="error" id="heightsErr"></div>
            </div>
            
        <!-- The user will click the register button-->
            <div class="row">
                <input type="submit" value="Register">
            </div>  
    </form>
</body>
</html>