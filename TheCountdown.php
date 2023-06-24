<!-- 
    Name: Vanessa Bonner
    Date: June 24, 2023
    File Name: TheCountdown.php
    Description: This is the PHP file that will display the countdown timer and the photos. 
    -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mars Countdown Timer to Mars</title> 
    <link rel="stylesheet" href="Background.css">
</head>
<body>
    <!--This is the header that will display the title of the page-->
    <h1>This is the Countdown timer for the next space designer ship to Mars.</h1>
    <div class="container-counter"> <!--This is the container for the countdown timer-->
    <div class="row"> <!--This is the row for the countdown timer-->
        <div class="col-12"> <!--This is the column for the countdown timer-->
            <h2>The Mars Countdown Timer!</h2> <!--This is the header for the countdown timer-->
            <div id="counter" class="countdown"></div> <!--This is the div for the countdown timer-->
        </div>
    </div>
    </div>

    <!--This contains the style for the images for the PHP linked to it-->
    <style>
        div4 {
        top: 200px;
        margin-top: 100px; 
    }
 </style>

    <!--This is the PHP code that will display the date and time-->
    <?php
        $dateTime = strtotime('July 30, 2023 12:00:00 AM');
        $getDateTime = date('F d, Y H: i:s', $dateTime);
    ?>

    <!--This is the PHP code that houses the images-->
    <div4 class="centered">
    <?php
        //This is the code that will display the slideshow photo
        //All within PHP code that will display and move the photos back and forth
        echo '<div4 class="picture-container">'; //This is the div that contains the picture container
        echo '<img class="center" src="photo1.jpg" id="myPicture" height="500" alt="img">'; //This is the image that is displayed
        echo '<h2><a href="previous.html" id="prevLink"> &lt; &lt; Previous</a>'; //This is the link for the previous button
        echo '<a href="next.html" id="nextLink"> | Next  &gt;&gt;</a></h2>'; //This is the link for the next button
        echo '<br>';
        echo '</div4>';
    ?>
    </div4>

    <!--This is the JavaScript code that will display the countdown timer-->
    <script>
        var CountDownTimer = new Date("<?php echo $getDateTime; ?>").getTime(); //This is the variable that will hold the countdown timer
 
    //This is the interval that will display the countdown timer
        var interval = setInterval(function() { 
        var current = new Date().getTime();

        //This is the console log that will display the current time
     console.log(current);

     //This is the difference between when we take off and the current time, in seconds.
        var diff = CountDownTimer - current;
        //This is the var days that will hold the days, hours, minutes, and seconds
        var days = Math.floor(diff / (1000 * 60 * 60 * 24));
        var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((diff % (1000 * 60)) / 1000);

        //This is the document that gets the element by the ID of counter and sets the inner HTML to the days, hours, minutes, and seconds
        document.getElementById("counter").innerHTML = " Days: " + days + " Hours: " + hours + " Minutes: " + minutes + " Seconds " + seconds;
    
        //The current time is past takeoff time, stop the interval and display a message.
        if (diff < 0) {
            clearInterval(interval);
            document.getElementById("counter").innerHTML = "You missed your flight from Earth to Mars!";
        }
}, 1000);

    //File for the Mars PHP File that help the buttons to work.
    window.onload = initLinks; //This is the window that loads the links
    var Pic = 0; //This is the variable that is set to 0
    var arrMyPics = new Array("photo1.jpg", "photo2.jpg", "photo3.jpg", "photo4.jpg"); //This is the array that holds the pictures

    //This is the function that initializes the links
    function initLinks() {
        document.getElementById("prevLink").onclick = processPrevious; //This is for the previous link.
        document.getElementById("nextLink").onclick = processNext; //This is for the next link.
    }
        //This is the function that processes the previous link
        function processPrevious() {
             if (Pic == 0) {
                //This is the if statement that checks if the picture is 0
                Pic = arrMyPics.length;
            }
                //This is the decrement of the picture
                Pic--;
                document.getElementById("myPicture").src = arrMyPics[Pic]; //This is the document that gets the element by the ID of myPicture and sets the source to the array of myPics and the picture
                return false;
            }   
    //This is the function that processes the next link
    function processNext() {
        //This is the increment of the picture
        Pic++;
        //This is the if statement that checks if the picture is the length of the array
        if (Pic == arrMyPics.length) {
            Pic = 0;
        }
        document.getElementById("myPicture").src = arrMyPics[Pic]; //This is the document that gets the element by the ID of myPicture and sets the source to the array of myPics and the picture
        return false;
    }

</script>
</body>
</html>