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