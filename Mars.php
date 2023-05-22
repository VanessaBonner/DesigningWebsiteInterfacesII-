<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--This is the title of the webpage-->
    <title>The Great Mars Toursim</title>
    <!--This is the link to the javascript file-->
    <script src="Mars.js"></script>
    <!--This is the link to the css file-->
    <link rel="stylesheet" href="Mars.css">
</head>
<body>'
    <!--This is the header of the webpage-->
    <h1> Welcome to The Great Mars Tourism </h1>
    <p class="centered">
        The Great Mars Toursim is a company that will take you to Mars and back.
        We will take you to the red planet and back to Earth safely.
        This is a once in a lifetime opportunity to see the red planet,
        so don't miss out on this opportunity,
        and book your trip to Mars today!
        Thank You!
    </p>
        <!--This is the div that will hold the slideshow images-->
    <div class="centered">
        <!--This is the PHP code that will display the slideshow photo -->
    <?php
        //This is the code that will display the slideshow photo
        //All within PHP code that will display and move the photos back and forth
        echo '<div class="centered">';
        echo '<h1 class="centered">The Slideshow</h1>';
        echo '<img class="center" src="photo1.jpg" id="myPicture" height="500" alt="Slideshow">';
        echo '<br>';
        echo '<h2><a href="previous.html" id="prevLink">&lt;&lt; Previous</a>';
        echo '<a href="next.html" id="nextLink">Next &gt;&gt;</a></h2>';
        echo '<br>';
        echo '</div>';
    ?>
    </div>
</body>
</html>